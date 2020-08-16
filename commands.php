	<html>
<head>
	
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;

		}
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>
	
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydb=$_POST['open'];

// Create connection
$conn =new mysqli($servername, $username, $password,$mydb);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "$_POST[command]";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	echo "<table>
<tr>
<th>Id</th>
<th>FirstName</th>
<th>LastName</th>
<th>Email</th>
<th>DOB</th>
<th>Gender</th>
<th>ContactNumber</th>
<th>password</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Pin Code</th>
<th>REG_DATE</th>
</tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Id'] . "</td>";
  echo "<td>" . $row['FirstName'] . "</td>";
   echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
     echo "<td>" . $row['DOB'] . "</td>";
      echo "<td>" . $row['Gender'] . "</td>";
       echo "<td>" . $row['ContactNumber'] . "</td>";

  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['Address'] . "</td>";
   echo "<td>" . $row['City'] . "</td>";
    echo "<td>" . $row['State'] . "</td>";
     echo "<td>" . $row['ZipCode'] . "</td>";
  echo "<td>" . $row['REG_DATE'] . "</td>";
  
  echo "</tr>";
}
echo "</table";
} 

$conn->close();
?>
</body>
</html>