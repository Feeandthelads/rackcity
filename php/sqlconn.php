<?php
/*php connection, to be require_once in other query files*/

//get ini File
//$database = parse_ini_file("/sqlinfo.ini");


//store credentials

//localhost Details
// $servername = $database ['server'];
// $dbname = $database ['name'];
// $username = $database ['user'];
// $password = $database ['pass'];

//DB Details
$servername = 'localhost';
$dbname = 'weight_memory';
$username = 'root';
$password = 'yerorawojijo';



//create connection

$link = new mysqli($servername, $username, $password, $dbname);

//Check connection

if ($link) {
	//echo "we rolling";
} else {
  echo("Connection failed: " . $link->error);
}

 ?>
