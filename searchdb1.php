<?php
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

// $sql = "SELECT jobtitle, nameofperson, contact FROM dir";
// $result = $conn->query($sql);



if (isset($_POST['submit'])){
  $jobtitle = $_POST["jobtitle"];    
  $sql = "SELECT * FROM staff WHERE jobtitle LIKE '%$jobtitle%'";
  $exe = mysqli_query($conn,$sql)or die("Query failed!!!");







  if (mysqli_num_rows($exe) > 0) {
    echo "<table border><tr><th>Job Title</th><th>Name</th><th>Contact</th> </tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($exe)) {
      echo "<tr>        <td>".$row[""]."</td>       <td>".$row["name"]."</td>      <td>".$row["contact"]."</td>  </tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();
}
?>
