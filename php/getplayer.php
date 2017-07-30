<?php
require_once ("connect.php");
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
$_SESSION["cha"] = $result['Charisma'];
$_SESSION["wis"] = $result['Wisdom'];

$stmt->close();
$conn->close();
?>
