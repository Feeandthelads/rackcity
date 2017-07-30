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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Montserrat:400,700|Plaster|Quantico" rel="stylesheet">
</head>
<body>

<div class="body-define-menu">

	<div id="banner">
		<h2 onclick="animateMenu()">Rack City <i class="fa fa-bars" aria-hidden="true"></i></h2>
		<div class="menuIcon">
			<div class="bars"></div>
			<div class="bars"></div>
			<div class="bars"></div>
		</div>

	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<a href="#">
					<button class="mapButton" id="mapButton1" onclick="goToCycleStation()">
						<img src="img/backburger.png" />
					</button>
				</a>
				<p>
					RETURN BICYCLE
				</p>
			</div>
			<div class="col-xs-4">
				<a href="#">
					<button class="mapButton" id="mapButton2" onclick="startProcessAgain()">
						<img src="img/brush.png" />
					</button>
					<p>
						FIND MORE ART
					</p>
				</a>
			</div>
			<div class="col-xs-4">
				<a href="usersheet.php">
					<button class="mapButton" id="mapButton3">
						<img src="img/account.png" />
					</button>
					<p>
						MY PROFILE
					</p>
				</a>
			</div>
		</div>
	</div>






</div>

<div class="body-define-map" id="map"></div>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMnxeLV4_nOQ45YrwO3VGchHnPbjpV0jw&callback=initMap" type="text/javascript"></script>
</body>

</html>
