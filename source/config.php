<?php 

$server = "localhost";
$user = "root";
$pass = "Palan@1270";
$database = "food_paradise";

$conn =  mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>