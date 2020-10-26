<?php
include("access");
mysql_select_db("2020_SummerA_3430_101_t5", $con);

$sql="INSERT INTO zone(zone_id, zone_name) VALUES ('$_POST[zone_id]','$_POST[zone_name]')";
if (!mysql_query($sql,$con))
{ die('Error: ' . mysql_error()); } echo "1 record added";
mysql_close($con); ?>

<html> <body> <button onclick="location.href='index.html'">Back </button> </body> </html>

