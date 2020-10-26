<?php
include("access");
mysql_select_db("2020_SummerA_3430_101_t5", $con);

$sql="INSERT INTO `written_ticket`(`ticket_num`, `violation_num`, `employee_id`)VALUES ('$_POST[ticket_num]','$_POST[violation_num]','$_POST[employee_id]')";
if (!mysql_query($sql,$con))
{ die('Error: ' . mysql_error()); } echo "1 record added";
mysql_close($con); ?>

<html> <body> <button onclick="location.href='index.html'">Back </button> </body> </html>

