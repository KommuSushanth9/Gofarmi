<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "finish"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3308);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
