<?php

$temp = $_GET['temperature'];
$humidity = $_GET['humidity'];

$conn = new mysqli("localhost","MYSQL_USERNANE","MYSQL_PASSWORD","MYSQL_DATABASE_NAME");

date_default_timezone_set('Asia/Kolkata');     
$current_timestamp = date('Y-m-d H:i:s');

$query = "INSERT INTO data(temp,humidity,timestamp) VALUES('$temp','$humidity','$current_timestamp')";
$result = $conn->query($query);

?>
