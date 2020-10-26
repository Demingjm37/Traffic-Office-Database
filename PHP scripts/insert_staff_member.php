<?php
include("access");
mysql_select_db("2020_SummerA_3430_101_t5", $con);

$sql="INSERT INTO staff_member(employee_id, ssn, mgrssn, first_n, minit, last_n, bday, phone_num, position) VALUES ('$_POST[employee_id]','$_POST[ssn]','$_POST[mgrssn]','$_POST[first_n]','$_POST[minit]','$_POST[last_n]','$_POST[bday]','$_POST[phone_num]','$_POST[position]')";
if (!mysql_query($sql,$con))
{ die('Error: ' . mysql_error()); } echo "1 record added";
mysql_close($con); ?>

<html> <body> <button onclick="location.href='index.html'">Back </button> </body> </html>

