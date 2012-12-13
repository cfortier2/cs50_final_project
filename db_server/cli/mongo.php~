<?php
		
	//connect to DB
	$m = new Mongo("ec2-50-17-59-106.compute-1.amazonaws.com");
        
        //select a database
	$db = $m->transit;
    
        //select a collection
        $collection = $db->stops;
        
        //get everything in collection
	$cursor = $collection->find();

        //iterate through results and display
	foreach($cursor as $obj) {
		echo $obj["stop_name"] . '\n';
	}
?> 
