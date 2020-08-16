	<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydb="mydb4"

// Create connection
$conn =new mysqli($servername, $username, $password,$mydb);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "$_POST[name]";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}


$conn->close();
?>