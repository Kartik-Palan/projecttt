<?php
$server = "localhost";
$username = "root"; // Default username for XAMPP or MySQL
$password = ""; // Default password for XAMPP (leave empty)
$database = ""; // Keep this empty for now

// Create connection
$conn = mysqli_connect($server, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successful!";
?>

