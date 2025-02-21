<?php
$servername = "172.31.3.17";
$username = "hardev";
$password = "@Hardev123!";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
