<?php
	require_once("transit_node.php");

	//connect to DB
	$m = new Mongo("ec2-50-17-59-106.compute-1.amazonaws.com");
        
        //select a database
	$db = $m->transit;
    
	//get next trains
	$nextTrains = nextTrains($db, 1);
	//print_debug($nextTrains);


	//test the linked list
	$myList = new LinkList();

	$nodeA = new transit_node('hoboken', '1');
	$nodeB = new transit_node('secaucus', '55');
	$nodeC = new transit_node('waldwick', '44');

	$myList->prepend($nodeB);
	$myList->prepend($nodeA);
	$myList->append($nodeC);

	$myList->printList();

	//function takes a train station and returns the next 5 trains
	function nextTrains($database, $num)
	{
		
		//get next 5 trains leaving after 7:15 am
		$query = array("stop_id" => "63", "departure_time" => array('$gt' => "07:34:00"));
		$cursor = $database->stop_times->find( $query )->sort(array("departure_time" => 1))->limit($num);

		return ($cursor);
	}

	//helper to print variables
	function print_debug($var)
	{
		//iterate through results and display
		foreach($var as $obj) {
			print_r($obj);;
		}
	}
?> 
