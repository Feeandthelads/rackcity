<?php
$servername = "localhost";
$username = "tyga";
$password = "rackcity";
$dbname = "racks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
   die("Connection faasdfasdfasdfiled: " . $conn->connect_error);
}
echo "Connected successfully";
?>
