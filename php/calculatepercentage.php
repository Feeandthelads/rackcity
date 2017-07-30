<?php
session_start();

$currenttotal = $_SESSION["stm"] + $_SESSION["wis"];
$_SESSION["perc"] = 0;

if($currenttotal > 30 && $currenttotal < 60) {
  $_SESSION["perc"] = floor((($currenttotal-30)/30) * 100);
} else if($currenttotal > 59 && $currenttotal < 90) {
  $_SESSION["perc"] = floor((($currenttotal-60)/30) * 100);
} else if($currenttotal > 89 && $currenttotal < 120) {
  $_SESSION["perc"] = floor((($currenttotal-90)/30) * 100);
} else if($currenttotal > 119 && $currenttotal < 200) {
  $_SESSION["perc"] = floor((($currenttotal-120)/80) * 100);
} else if($currenttotal > 199) {
  $_SESSION["perc"] = 100;
} else {
  $_SESSION["perc"] = floor(($currenttotal/30) * 100);
}

?>
