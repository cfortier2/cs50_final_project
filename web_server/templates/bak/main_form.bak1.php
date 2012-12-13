<!DOCTYPE html> 
<html> 
<head> 
	<title>Transit - Chris Fortier</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

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
                    echo  "<option value = '" . $stop["_id"] ."' > ". $stop["stop_name"] . " </option>" . "\n";
                    } 
                ?>
	        </select>
        	</div>
	
		<!-- choose destination station -->	
		<div data-role="fieldcontain">
	        <!--<label for="destination_station" class="select">Choose a destination station:</label> -->
	        <select name="origin" id="origin" >
		        <option data-placeholder="true">Destination:</option>
                
                //display each station
                <?php 
                    foreach($stops as $stop)
                    {
                    echo  "<option value = '" . $stop["_id"] ."' > ". $stop["stop_name"] . " </option>" . "\n";
                    } 
                ?>
	        </select>
		</div>

		<!--time picker -->
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
			    <!-- etc. -->
		    
			
		    </fieldset>
		</div>		
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>
