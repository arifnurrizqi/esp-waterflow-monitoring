<?php
$servername = "localhost";

// REPLACE with your Database name
$dbname = "esp_waterflow";
// REPLACE with Database user
$username = "root";
// REPLACE with Database user password
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, value1, value2, value3, value4, reading_time FROM espdata order by reading_time desc limit 40";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$result->free();
$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>