<?php


include 'variables.php';


$servername = "localhost";
$username = "adubee";
$password = "Koomsongh77";
$dbname = "directories";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `staff` WHERE `jobtitle` = '$jobtitle' ";

if (mysqli_query($conn,$sql)){
  echo "Record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>


