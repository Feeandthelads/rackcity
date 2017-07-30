<?php
session_start();

$currenttotal = $_SESSION["stm"] + $_SESSION["wis"];
$SESSION["perc"] = 0;

if($currenttotal > 30 && $currenttotal < 60) {
  $percentage = (($currenttotal-30)/30) * 100;
} else if($currenttotal > 59 && $currenttotal < 90) {
  $percentage = (($currenttotal-60)/30) * 100;
} else if($currenttotal > 89 && $currenttotal < 120) {
  $percentage = (($currenttotal-90)/30) * 100;
} else if($currenttotal > 119 && $currenttotal < 200) {
  $percentage = (($currenttotal-120)/80) * 100;
} else if($currenttotal > 199) {
  $percentage = 100;
} else {
  $percentage = ($currenttotal/30) * 100;
}

?>
