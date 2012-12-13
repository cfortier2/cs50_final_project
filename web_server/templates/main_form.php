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
		var stop_lat = 40.739496; 
		var stop_lon = -74.16558;


		//from Google maps API - center map
		var initialLocation = new google.maps.LatLng(stop_lat, stop_lon);
		var browserSupportFlag = new Boolean();
		
		function initialize() {
			var mapOptions = {
				zoom: 14,
				mapTypeId: google.maps.MapTypeId.ROADMAP
		};
			
		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions); 

		//try geolocation
		if(navigator.geolocation) {
			browserSupportFlag = true;
			navigator.geolocation.getCurrentPosition(function(position) {
					initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
					map.setCenter(initialLocation);

					//marker
					var marker = new google.maps.Marker({position:initialLocation});
					marker.setMap(map);

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

		//set marker
		/*
		var marker = new google.maps.Marker({
				position: initialLocation,
		});

		marker.setMap(map);
		 */
		}

	</script>    

</head> 
<body onload="initialize()"> 
<form action="main.php" method="post">

<div data-role="page">

<div data-role="header">
<h1>Get Directions</h1>
</div><!-- /header -->

<div data-role="content">	

<!-- choose start station -->	
<div data-role="fieldcontain">
	<!--<label for="start_station" class="select">Choose a starting station:</label> -->
	<select name="origin" id="origin" >
		<option data-placeholder="true">Origin:</option>
		
		//display each station
		<?php 
			foreach($stops as $stop)
			{
			echo  "<option value = '" . $stop["stop_id"] ."' > ". $stop["stop_name"] . " </option>" . "\n";
			} 
		?>
	</select>
	</div>

<!-- choose destination station -->	
<div data-role="fieldcontain">
	<!--<label for="destination_station" class="select">Choose a destination station:</label> -->
	<select name="destination" id="destination" >
		<option data-placeholder="true">Destination:</option>
		
		//display each station
		<?php 
			foreach($stops as $stop)
			{
			echo  "<option value = '" . $stop["stop_id"] ."' > ". $stop["stop_name"] . " </option>" . "\n";
                    } 
                ?>
	        </select>
		</div>

		<!--time picker and submit-->
		<div data-role="fieldcontain">
		    <fieldset data-role="controlgroup" data-type="horizontal">
		    
			<label for="select-choice-hour">Hour</label>
			<select name="select-choice-hour" id="select-choice-hour">
			    <option>Hour</option>
			    <?php 
		    		for($i = 0; $i < 25; $i++)
				{
					if ($i < 10)
						$num = "0" . $i;
					else
						$num = $i;

					echo "<option value='" . $num . "'>" . $num . "</option>" . "\n";
		    		}
			    ?>
			    <!-- etc. -->
			</select>
		    
			<label for="select-choice-min">Min</label>
			<select name="select-choice-min" id="select-choice-min">
			    <option>Min</option>
			    <?php 
		    		for($i = 0; $i < 60; $i++)
				{
					if ($i < 10)
						$num = "0" . $i;
					else
						$num = $i;

					echo "<option value='" . $num . "'>" . $num . "</option>" . "\n";
		    		}
				?>
			</select>

			<input type="submit" value="Go" />
		    </fieldset>
		</div>	

		<!--google map -->
		 <div data-role="fieldcontain" id="map_canvas" style="width:100%; height:300px"></div>	
		
    <!-- info -->
    <a href="info.php" data-role="button">Project Info</a>

	</div><!-- /content -->

</div><!-- /page -->

</form>
</body>
</html>
