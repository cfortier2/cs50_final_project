<?php
    /*
     * route.php
     *
     * Chris Fortier cs50 - Final Project
     *
     * This is the core routing program for the project. It requires transit_node.php, which defines a node of relevent data for a train stop and implements a linked list of those stops.
     *
     * process:
     *      Conceptually speaking, this implementation views an individual train trip as a singly linked list of transit_nodes (stops). To determine an optimal route, we start with the next train leaving a given stop. The data from that trip is then used to construct the linked list (transit_list). 
     *
     * functions:
     *
     * nextTrains:
     *      queries the database for the next $num of trains departing from a given $stop_id 
     *
     * nextTrip:
     *      queries the database for the details of a given $trip_id for stops after the given $stop_sequence
     *
     * getStop:
     *      queries the database for details of a given $stop_id
     *
     * test:
     *      constructs a single list with hard-coded data for testing. 
     */


    require_once("transit_node.php");

    $localTest = False;

	//connect to DB
	if ($localTest)
    {
        print("localTest\n");
        $m = new Mongo();
        
        //select a database
        $db = $m->test;
    }
    else
    {
        $m = new Mongo("ec2-50-17-59-106.compute-1.amazonaws.com");
        
        //select a database
        $db = $m->transit;
    }

	
	//test route
	astar($db, 63, 29, "07:34:00");

	//-- core routing function -----------------------//
	function astar($db, $origin, $destination, $time)
	{
			//load next i trains from origin in to queue
			$num = 1;
			$nextTrains = nextTrains($db, $origin, $time, $num);
			print_debug($nextTrains);

			//array of linked lists of next available trips. 
			$tripList = [];
			$i = 0;

			//create linked list for each of the next available trains
			foreach($nextTrains as $train)
			{
				//print_r($train);
				
				//create a linked list of the remainder of the route for the next train
				$tripList[$i] = new transit_list();
				
				//get details of next available trip
				$nextTrips = nextTrip($db, $train['trip_id'], $train['stop_sequence']);
				//print_debug($nextTrips);

				//add node/stop to list
				foreach($nextTrips as $trip)
				{
					//print_r($nextTrips);

					//get stop name
					$stop = getStop($db, $trip['stop_id']);
					$name = "";
					foreach($stop as $s)
					{
						//print($s['stop_name']);
						$name = $s['stop_name'];
					}

					//get distance
					$dist = getDistance($db, $trip['stop_id'], $destination);

					//create node
					$node = new transit_node($name, $trip['stop_id'], $trip['arrival_time'], $trip['departure_time'], $dist);

					//add to tripList
					$tripList[$i]->append($node);
				}

				//increment counter
				$i++;
			}

			//return trip if destination is found
			//if ()


		//print the lists
		foreach($tripList as $trip)
			$trip->printList();

		//remove nodes after destination found
		$tripList[0]->remove_after(131);
		print("\nRevised List:\n");
		print_r($tripList[0]);
	}


	//--helper functions-------------------------------------------------------------------------------------------------//

	//function takes a train station and returns the next $num trains
	function nextTrains($database, $stop_id, $time, $num)
	{
		//get next $num of trains leaving after $time from $stop_id
		$query = array("stop_id" => $stop_id, "departure_time" => array('$gt' => $time));
        $cursor = $database->stop_times->find( $query )->sort(array("departure_time" => 1))->limit($num);
        
		//print("\nnextTrains\n");
		//print_debug($cursor);
		
		return ($cursor);
	}

	//function takes a trip id and returns an array of the remaining stops
	function nextTrip($database, $trip_id, $stop_seq)
	{
		//gets the trip
		$query = array("trip_id" => $trip_id, "stop_sequence" => array('$gte' => $stop_seq));
		$cursor = $database->stop_times->find( $query )->sort(array("stop_sequence" => 1));

		//print_debug($cursor);
		//print_r($cursor);
		
		return ($cursor);
	}

	//get name of a stop
	function getStop($db, $stop_id)
	{
		//get the stop info
		$query = array("stop_id" => $stop_id);
		$cursor = $db->stops->find( $query );
		
		//print_debug($cursor);
		return ($cursor);
	}

	//helper to print variables
	function print_debug($var)
    	{
		//display if null
		if ($var == NULL)
		print("$var is NULL");

		//iterate through results and display
		foreach($var as $obj) {
			print_r($obj);;
		}
	}

	//get distance between two stops
	function getDistance($db, $start_id, $end_id)
	{
		//get start
		$start = getStop($db, $start_id);
		$start_loc = "";
		foreach($start as $s)
		{
			//print_r($s['loc']);
			$start_loc = $s['loc'];
		}
		
		//get end
		$end = getStop($db, $end_id);
		$end_loc = "";
		foreach($end as $e)
		{
			//print_r($e['loc']);
			$end_loc = $e['loc'];
		}

		//get data
		$cursor = $db->command(['geoNear' => 'stops',
					'near'	=> [$start_loc[0], $start_loc[1]],
					'spherical' => true,
					'distanceMultiplier' => 3959,
					'query' => ['stop_id' => $end_id ]	]);

		//hard coded test
		/*
		$cursor = $db->command(['geoNear' => 'stops',
					'near'	=> [-74.075821, 40.761188],
					'spherical' => true,
					'distanceMultiplier' => 3959,
					'query' => ['stop_name' => "HOBOKEN" ]	]);
		 */

		//print_r($cursor);

		//print_r($cursor['results'][0]['dis']);
		
		//return the distance
		$distance = $cursor['results'][0]['dis'];
		return $distance;
	}
?> 
