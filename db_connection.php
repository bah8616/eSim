<?php
$servername = "localhost";
$username = "dev";
$password = "justdev";
$dbname = "esim_db";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

