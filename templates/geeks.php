<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
	<body style="background-size: 100%;" background="images/a.jpg" >
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => proj
		$con = mysqli_connect("localhost", "root", "", "login_sample_db");
		
		// Check connection
		if($con === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$title = $_REQUEST['title'];
		$team = $_REQUEST['team'];
		$domain = $_REQUEST['domain'];
		$guide= $_REQUEST['guide'];
		$references = $_REQUEST['references'];
		$category = $_REQUEST['category'];
		$branch= $_REQUEST['branch'];
		
		
		
		// Performing insert query execution
		// here our table name is projects
		$sql = "INSERT INTO projects VALUES ('','$title',
			'$team','$domain','$category','$branch','$guide','$references')";
		
		if(mysqli_query($con, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$title\n $team\n "
				. "$domain\n $guide\n $category\n $branch\n $references");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($con);
		}
		
		// Close connection
		mysqli_close($con);
		?>
	</center>
</body>

</html>
