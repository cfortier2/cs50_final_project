<!DOCTYPE html> 
<html> 
<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>My Title</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>Hello world</p>
		
		<ul data-role="listview" data-inset="true" data-filter="true">
	    <li><a href="#">Acura</a></li>
	    <li><a href="#">Audi</a></li>
	    <li><a href="#">BMW</a></li>
	    <li><a href="#">Cadillac</a></li>
	    <li><a href="#">Ferrari</a></li>
        </ul>   
        
        <form>
           <label for="slider-0">Input slider:</label>
           <input type="range" name="slider" id="slider-0" value="25" min="0" max="100"  />
        </form>
		
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>
