<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

	<title>Rack City</title>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/node_modules/haversine/haversine.js"></script>
	  <script src="js/node_modules/papaparse/papaparse.js"></script>
	  <script type="text/javascript" src="js/map.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Montserrat:400,700|Plaster|Quantico" rel="stylesheet">
</head>
<body>

<div class="body-define mapContents">
	<a href="index.php">
		<div id="banner">
			<h2>Rack City</h2>
		</div>
	</a>
	<a href="#">
		<button class="mapButton testbutt" onclick="goToCycleStation()" ></button>
	</a>
	<a href="#">
		<button class="mapButton" onclick="startProcessAgain()"></button>
	</a>




</div>




<div class="body-define" id="map"></div>



<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMnxeLV4_nOQ45YrwO3VGchHnPbjpV0jw&callback=initMap" type="text/javascript"></script>
</body>

</html>
