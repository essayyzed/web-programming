<!DOCTYPE html>
<html>

<head>
	<title>Insert Data</title>
</head>

<body>
	<center>
		<?php

		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$semester = $_REQUEST['semester'];
		$intrests = $_REQUEST['intrests'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$name',
			'$email','$gender','$semester','$intrests')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $email\n "
				. "$gender\n $semester\n $intrests");
		} else{
			echo "ERROR:  $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
