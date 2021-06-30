<?php

$servername = "localhost";
$username = "essayyzed";
$password = "root123";
$dbname = "fyp";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

$sqlquery = "INSERT INTO table VALUES
	('John', 'Doe', 'john@example.com')"

if ($conn->query($sql) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// collect value of input field
	$data = $_REQUEST['val1'];

	if (empty($data)) {
		echo "data is empty";
	} else {
		echo $data;
	}
}
?>

// Closing the connection.
$conn->close();

?>
