<?php
include("access");
mysql_select_db("2020_SummerA_3430_101_t5", $con);

$sql="INSERT INTO `supplies`(`provider_id`, `event_id`, `item_id`, `item_quantity`) VALUES ('$_POST[provider_id]','$_POST[event_id]','$_POST[item_id]','$_POST[item_quantity]')";
if (!mysql_query($sql,$con))
{ die('Error: ' . mysql_error()); } echo "1 record added";
mysql_close($con); ?>

<html> <body> <button onclick="location.href='index.html'">Back </button> </body> </html>

