<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$servername = "localhost";
$username = "root";
$password = "";
$mydb=$_POST['command'];

// Create connection
$conn =new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "create database";
$sql=$sql." ".$mydb;
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();

	?>

</body>
</html>