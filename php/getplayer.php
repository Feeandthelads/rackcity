<?php
require_once ("php/connect.php");
session_start();

// prepare and bind
$stmt = $conn->prepare("SELECT * FROM users WHERE UID = ?");
$stmt->bind_param("i", $id);

$id = 1;
$stmt -> execute();

$answer= $stmt -> get_result();

$result = $answer -> fetch_assoc();

$_SESSION["name"] = $result['Name'];
$_SESSION["img"] = $result['Image'];
$_SESSION["stm"] = $result['Stamina'];
$_SESSION["wis"] = $result['Wisdom'];
$_SESSION["cls"] = $result['Class'];
$_SESSION['art'] = 0;
$_SESSION['bike'] = 0;
$_SESSION['streak'] = 0;
$_SESSION['trips'] = array();

$stmt->close();
$conn->close();
?>
