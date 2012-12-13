<!DOCTYPE html> 
<html> 
<head> 
	<title>My Page</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	
	<link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet"/>
        
    <script src="js/jquery-1.8.3.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
        
	
	 <style type="text/css">
          html { height: 100% }
          body { height: 100%; margin: 0; padding: 0 }
          #map_canvas { height: 100% }
        </style>
        
	<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAHSD44Dh2iM1NwlsZTTL2GgZiRNO3N1E&sensor=true">
    </script>

    <script type ="text/javascript">
        //pass php variables to javascript variables
        var stop_lat = <?php print $stop_lat  ?>;
        var stop_lon = <?php print $stop_lon  ?>;
        
        //from Google maps API - center map
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(stop_lat, stop_lon),                    
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
                mapOptions); 
        }
    </script>    
    
   
        
</head> 
<body onload="initialize()"> 
<div class="container-fluid">

<div data-role="page">

	<div data-role="header">
		<h1>Maps</h1>
	</div><!-- /header -->

	<div data-role="content">	
	    
        
        <div id="map_canvas" style="width:75%; height:75%"></div>
       
		
		
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>
