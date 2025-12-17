<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "gym_database";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch subscriptions from the database
$sql = "SELECT id, plan, subscribed_at FROM subscriptions";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription List</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid black; }
        th { background-color: #f4b400; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        a { display: block; margin-top: 20px; text-decoration: none; font-size: 18px; color: blue; }
    </style>
</head>
<body>

<h2>Subscription List</h2>

<?php if ($result->num_rows > 0): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Plan</th>
            <th>Subscription Date</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['plan'] ?></td>
                <td><?= $row['subscribed_at'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p>No subscriptions found.</p>
<?php endif; ?>

<a href="index.html">← Back to Home</a>

</body>
</html>

<?php
$conn->close();
?>
