<?php
    //Chris Fortier - final project
    //page gets location from database and creates page

    // configuration
    require("../includes/functions.php");

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
		//echo $obj["stop_name"] . "\n";
        $stop_name = $obj["stop_name"];
		$stop_lat = $obj["stop_lat"];
		$stop_lon = $obj["stop_lon"];
	}

	print($stop_lat . " " . $stop_lon);

    //render page
    render("map_centered.php", ["title" => $stop_name, "stop_lat" => $stop_lat, "stop_lon" => $stop_lon]);
    //render("jquery_map.php", ["title" => $stop_name, "stop_lat" => $stop_lat, "stop_lon" => $stop_lon]);

?>


