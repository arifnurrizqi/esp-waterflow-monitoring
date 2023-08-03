<?php

$valid_username = 'user';
$valid_password = '12345678';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] !== $valid_username || $_SERVER['PHP_AUTH_PW'] !== $valid_password) {
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="My Protected Area"');
    echo 'Authorization required';
    exit;
}

include "config.php";
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