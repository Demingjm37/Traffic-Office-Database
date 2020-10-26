<?php
include("access");
mysql_select_db("2020_SummerA_3430_101_t5", $con);

$sql="INSERT INTO event (event_name, event_id, event_date, event_type)
VALUES ('$_POST[event_name]','$_POST[event_id]','$_POST[event_date]','$_POST[event_type]')";
if (!mysql_query($sql,$con))
{ die('Error: ' . mysql_error()); } echo "1 record added";
mysql_close($con); ?>

<html>
<body>
<button onclick="location.href='index.html'">Back </button>
</body>
</html>

