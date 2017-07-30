<?php
require_once ("connect.php");
session_start();

$mult = 1 + ($_SESSION['streak']/10);

$trip = (($_SESSION['art'] + $_SESSION['bike']) * 0.15) * $mult;

$nstm = $_SESSION["stm"] + $trip;

$nwis = ($_SESSION["wis"] + ($_SESSION['art'] * 0.2)) * $mult;

$nclass = '';

if ($nstm + $nwis > 30) {
  $nclass = 'Intermediate ';
} else if ($nstm + $nwis > 60) {
  $nclass = 'Adept ';
} else if ($nstm + $nwis > 90) {
  $nclass = 'Veteran ';
} else if ($nstm + $nwis > 120) {
  $nclass = 'Master ';
} else if ($nstm + $nwis > 200) {
  $nclass = ' Grandmaster ';
}

if($nstm > 10 && $nstm > $nwis) {
  $nclass .= 'Explorer';
} else if ($nwis > 10 && $nwis > $nstm) {
  $nclass .= 'Scholar';
} else if ($nwis > 10 && $nwis == $nstm) {
  $nclass .= 'Bard';
} else {
  $nclass .= 'Novice';
}

$stmtGrow = $conn->prepare("UPDATE user SET Stamina=?, Wisdom=?, Class=? WHERE UID=1");
$stmtGrow->bind_param("iis", $stam , $wisd, $clss);

$stam = $nstm;
$wisd = $nwis;
$clss = $nclass;

$stmtGrow->execute();

$stmtGrow->close();
$conn->close();

 ?>
