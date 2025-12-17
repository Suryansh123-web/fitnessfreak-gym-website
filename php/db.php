<?php
$host = "localhost";
$user = "root";  // Default MySQL user
$pass = "";  // Leave empty if no password is set
$dbname = "gym_website";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>