<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

// Collect Data from html file

if(isset($_GET["submit"])){
    $jobtitle = $_GET[""];
    $sql = "SELECT * FROM dbname WHERE jobtitle LIKE '%$jobtitle%'";
    $exe =  mysqli_query($conn,$sql)or die("Query failed!");
}

if (mysqli_num_rows($exe) > 0){
    echo "<table border><tr><th> Job Title </th><th>Name</th><th>Contact</th><th> <tr>";
    //output each row of data in the table
    while ($row = mysqli_fetch_assoc($exe)){
        echo "<tr>  <td>".$row["jobtitle"]."</td>    <td>".$row["nameofperson"]."</td>  <td>".$row["contact"]."</td> <tr>";
    }
    echo "</table>";
}else{
    echo "Directory does not exist";
}
$conn->close();



>