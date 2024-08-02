<?php
$servername = "localhost";  // Replace with your server name
$username = "root";     // Replace with your MySQL username
$password = "mysql";     // Replace with your MySQL password
$dbname = "furniture_rental";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
