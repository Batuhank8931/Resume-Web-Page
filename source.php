
<?php

/*
If you want to get the data from your database, please fill the requested data below.

$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
$dbport = "your_database_port";
$tablename = "your_table_name";
$columnname = "your_column_name";

$conn = new mysqli($servername, $username, $password, $dbname, $dbport);

$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);


while ($row = $result->fetch_assoc()) {
    $jsonString= $row[$columnname];
}

$data = json_decode($jsonString, true);

$conn->close();

If you activate this section please get comment below section:

*/
$file_path = 'maindata.txt';

$json = file_get_contents($file_path);

$data = json_decode($json, true);


?>
