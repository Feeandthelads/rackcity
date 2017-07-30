<?php
session_start();

$currenttotal = $_SESSION["stm"] + $_SESSION["wis"];
$SESSION["perc"] = 0;

if($currenttotal > 30 && $currenttotal < 60) {
  $SESSION["perc"] = (($currenttotal-30)/30) * 100;
} else if($currenttotal > 59 && $currenttotal < 90) {
  $SESSION["perc"] = (($currenttotal-60)/30) * 100;
} else if($currenttotal > 89 && $currenttotal < 120) {
  $SESSION["perc"] = (($currenttotal-90)/30) * 100;
} else if($currenttotal > 119 && $currenttotal < 200) {
  $SESSION["perc"] = (($currenttotal-120)/80) * 100;
} else if($currenttotal > 199) {
  $SESSION["perc"] = 100;
} else {
  $SESSION["perc"] = ($currenttotal/30) * 100;
}

?>
