<!DOCTYPE html>
<html>

<head>
	<title>AddToDirectory</title>
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





		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "adubee", "Koomsongh77", "directories");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$jobtitle = $_REQUEST['jobtitle'];
		$name = $_REQUEST['name'];
		$contact = $_REQUEST['contact'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO staff VALUES ('$jobtitle',
			'$name','$contact')";
		
		if(mysqli_query($conn, $sql)){
			echo "<div class='container'>
			<div class=' custom-col-insert'>
			<center>
			<h3>New record created successfully</h3>
			
			</center>
			</div>
			</div>";
		} else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		// Close connection
		mysqli_close($conn);
		?>

	<div>
		<div class="custom-button"><a class="btn btn-primary" href="insert.html" role="button">Back</a></div>
		
	</div>
	


</body>

</html>
