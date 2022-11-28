<?php
$servername = "localhost";
$username = "adubee";
$password = "Koomsongh77";
$dbname = "directories";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>