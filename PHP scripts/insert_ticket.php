<?php
include("access");
mysql_select_db("2020_SummerA_3430_101_t5", $con);

$sql="INSERT INTO `ticket`(`license_plate_num`, `state`, `ticket_num`, `date`, `violation_type`) VALUES ('$_POST[license_plate_num]','$_POST[state]','$_POST[ticket_num]','$_POST[date]','$_POST[violation_type]')";
if (!mysql_query($sql,$con))
{ die('Error: ' . mysql_error()); } echo "1 record added";
mysql_close($con); ?>

<html> <body> <button onclick="location.href='index.html'">Back </button> </body> </html>

