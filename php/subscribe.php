<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "gym_database";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$plan = isset($_GET['plan']) ? $_GET['plan'] : '';

if ($plan === '') {
    echo "No subscription plan selected!";
    exit;
}

$sql = "INSERT INTO subscriptions (plan) VALUES ('$plan')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Thank you for subscribing to the <b>$plan</b> plan!</h2>";
    echo "<a href='/fitnessfreak/fitnessfreak.html'>← Back to Home</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
