<?php
$servername = "localhost";
$database  = "login_sample_db"
$username = "username";
$password = "password";

// Create connection

$con = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

mysqli_close($conn);

?>