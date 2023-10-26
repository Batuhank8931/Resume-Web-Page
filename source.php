
<?php

$conn = new mysqli("127.0.0.1","u161087782_database", "Batu1010!", "u161087782_Batuhandata", "3306");

$sql = "SELECT * FROM source_data";
$result = $conn->query($sql);


while ($row = $result->fetch_assoc()) {
    $jsonString= $row["data"];
}

$data = json_decode($jsonString, true);

$conn->close();

?>