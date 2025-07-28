<?php
// Database configuration
$host     = "localhost";
$username = "root";
$password = "";
$database = "project";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Close the connection
mysqli_close($conn);
?>