<?php

$servername = "your_mysql_server";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";
$tablename = "your_table_name";
$columnname = "your_table_column_name";


$conn = new mysqli($servername, $username, $password, $dbname);


$file_path = 'maindata.txt';

$json = file_get_contents($file_path);

echo $json;

// Escape special characters in the JSON data

$jsonData = $conn->real_escape_string($json);

// SQL query to insert JSON data into the table

$updateid= mysqli_query($conn,"UPDATE `$tablename` SET data='$jsonData' WHERE 1");

$conn->close();

?>


