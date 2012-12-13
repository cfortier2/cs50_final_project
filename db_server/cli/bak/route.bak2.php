<?php
	require_once("transit_node.php");

    $localTest = True;

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

    
    //get next trains
    $stop = 63;
    $time = "07:34:00";
	$nextTrains = nextTrains($db, $stop, $time, 1);
	//print_debug($nextTrains);


	//create a linked list of the remainder of the route for the next train
	$tripList = new transit_list();

	//get details of next available trip
	$nextTrips = nextTrip($db, '1477', 1);
	//print_debug($nextTrips);

	//add node/stop to list
	foreach($nextTrips as $trip)
	{
		//get stop name
		$stop = getStop($db, $trip['stop_id']);
		$name = "";
		foreach($stop as $s)
		{
			//print($s['stop_name']);
			$name = $s['stop_name'];
		}

		//create node
		$node = new transit_node($name, $trip['stop_id'], $trip['arrival_time'], $trip['departure_time']);

		//add to tripList
		$tripList->append($node);
    }

	//$tripList->printList();

	//test inList()
	//$tripList->inList('stop_name', 'HOHOKUS');

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
?> 
