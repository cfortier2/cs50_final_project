<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Chris Fortier Final: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Chris Fortier Final</title>
        <?php endif ?>

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
        
        <div id="map_canvas" style="width:75%; height:75%"></div>

        <div id="middle"> <p> lat/lon: <?php echo $stop_lat . "/" . $stop_lon ?> </p></div>
    </body>
    

