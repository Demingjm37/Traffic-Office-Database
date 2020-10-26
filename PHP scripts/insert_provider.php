<?php
include("access");
mysql_select_db("2020_SummerA_3430_101_t5", $con);

$sql="INSERT INTO provider(provider_id, website_url, phone_num) VALUES
('$_POST[provider_id]','$_POST[website_url]','$_POST[phone_num]')";
if (!mysql_query($sql,$con))
{ die('Error: ' . mysql_error()); } echo "1 record added";
mysql_close($con); ?>

<html> <body> <button onclick="location.href='index.html'">Back </button> </body> </html>

