<?php>
require_once ("connect.php");

// prepare and bind
$stmt = $conn->prepare("SELECT * FROM users WHERE UID = ?");
$stmt->bind_param("i", $id);

$id = 1;
$stmt -> execute();

$result = $stmt -> get_result();

echo ("<div id = 'name' data-id = ".result["Name"]."style ='hidden:true'>
</div>");

echo ("<div id = 'stamina' data-id = ".result["Stamina"]."style ='hidden:true'>

</div>");

echo ("<div id = 'charisma' data-id = ".result["Charisma"]."style ='hidden:true'>

</div>");

echo ("<div id = 'wisdom' data-id = ".result["Wisdom"]."style ='hidden:true'>

</div>");

$stmt->close();
$conn->close();

?>
