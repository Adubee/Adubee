<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/directory.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-light-custom">
        <a class="navbar-brand" target="_blank" href="https://www.gcaa.com.gh/web/" ><span><img width="50px" src="images/gcaa-release-removebg-preview.png" alt=""></span></a>
        
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-custom" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-custom" href="insert.html">Add A Directory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-custom" href="searchdb.html">Search A Directory</a>
            </li>
            <li class="nav-item custom-nav">
              <a class="nav-link nav-link-custom custom-nav" href="https://www.gcaa.com.gh/web/" target="_blank">Official Website</a>
            </li>
            
            
          </ul>
          
        </div>
      </nav>


    <div>
      <div class="custom-button "><a class="btn btn-primary" href="searchdb.html" role="button">Back</a>
      </div>
    </div>



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
  $sql = "SELECT * FROM staff WHERE name like '%$jobtitle%' or contact like '%$jobtitle%' or jobtitle like '%$jobtitle%'      ";
  $exe = mysqli_query($conn,$sql)or die("Query failed!!!");







  if (mysqli_num_rows($exe) > 0) {
    echo "<div class='container custom-foot-head'> <table class= 'table table-striped table-hover table-sm' ><tr> <th>JOB TITLE</th> <th>NAME</th> <th>CONTACT</th> </tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($exe)) {
      echo "<tr>         <td>".$row["jobtitle"]."</td>       <td>".$row["name"]."</td>      <td>".$row["contact"]."</td>  </tr> 
      
      </div>";
    }
    
  } else {
    echo "<div class='container'>
    <div class=' custom-col-insert'>
    <center>
    <h3>No Directory Found</h3>
    
    </center>
    </div>
    </div>";
  }
  $conn->close();
}
?>










</body>
</html>



