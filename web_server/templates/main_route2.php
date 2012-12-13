<!DOCTYPE html> 
<html> 
<head> 
	<title>Transit - Chris Fortier</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	
	<!--added for Google Maps -->
	<script type="text/javascript" src="../html/js/jquery.ui.map.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<style type="text/css">
      		html { height: 100% }
      		body { height: 100%; margin: 0; padding: 0 }
      		#map_canvas { height: 100% }
	 </style>

	 <script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAHSD44Dh2iM1NwlsZTTL2GgZiRNO3N1E&sensor=true">
	 </script>

	<script type ="text/javascript">
    	var stop_lat = 40.739498; 
		var stop_lon = -74.16558;

		//add markers
		<?php
			echo "var markers = [ " . "\n";
			if ($route != NULL)
			{
					$cursor = $route->getHead();
					
					while ($cursor != NULL)
					{
						echo "<p> Stop: " . $cursor->stop_id . "</p>" . "\n";
						
						//move cursor
						$cursor = $cursor->nextNode;
					}
			}
			echo "marker" . "\n";
			echo "];" . "\n";
		?>

		//from Google maps API - center map
		var initialLocation = new google.maps.LatLng(stop_lat, stop_lon);
		var browserSupportFlag = new Boolean();
		
		function initialize() {
			var mapOptions = {
				zoom: 14,
				mapTypeId: google.maps.MapTypeId.ROADMAP
		};
			
		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions); 

		//set center marker?
		var marker = new google.maps.Marker({ 
				position: initialLocation,
		});

		marker.setMap(map);

		//try geolocation
		if(navigator.geolocation) {
			browserSupportFlag = true;
			navigator.geolocation.getCurrentPosition(function(position) {
					initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
					map.setCenter(initialLocation);
			}, function() {
					handleNoGeolocation(browserSupportFlag);
			});
		}
		//browser doesn't support geolocation
		else {
			browserSupportFlag = false;
			handleNoGeolocation(browserSupportFlag);
		}	

		function handleNoGeolocation(errorFlag) {
				if (errorFlag == true) {
						alert("Geolocation service failed.");
				} else {
					alert("Your browser doesn't support geolocation.");
				}
				map.setCenter(initialLocation);
		}
		}

	</script>    

</head> 
<body onload="initialize()"> 
<form action="main.php" method="post">

<div data-role="page">

<div data-role="navbar">
	<ul>
		<li><a href="http://54.235.245.148/web_server/html/main.php	">Home</a></li>
	</ul>
</div><!-- /navbar -->


	<div data-role="content">	
		<fieldset data-role="controlgroup">
		
		<!--  
		<div data-role="collapsible">
   			<h3>Route:</h3>
   			<p><?php print_r($route)?></p>
   		</div>  -->
   			
		<?php 
			if ($route != NULL)
			{
					$cursor = $route->getHead();
					
					while ($cursor != NULL)
					{
						echo "<div data-role=\"collapsible\">" . "\n";
						echo "<h3>" . $cursor->stop_name . "</h3>" . "\n";
						echo "<p> Stop: " . $cursor->stop_id . "</p>" . "\n";
						echo "<p> Train: " . $cursor->block_id . "</p>" . "\n";
						echo "<p> Arrival_Time: " . $cursor->arrival_time . "</p>" . "\n";
						echo "</div>" . "\n";
   				
						//move cursor
						$cursor = $cursor->nextNode;
					}
			}
			else
			{
				echo "<div data-role=\"collapsible\">" . "\n";
				echo "<h3>" . "route is null" . "</h3>" . "\n";
				echo "<p> Nothing to see here :)</p>" . "\n";
				echo "</div>" . "\n";

			}
   			
   		?>
		
		</fieldset>

		<!--google map -->
		 <fieldset data-role="controlgroup">
			 <div data-role="fieldcontain" id="map_canvas" style="width:100%; height:500px"></div>	
		</fieldset>


	</div><!-- /content -->

</div><!-- /page -->

</form>
</body>
</html>
