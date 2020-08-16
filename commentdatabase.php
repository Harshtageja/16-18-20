<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	$conn= new mysqli("localhost","root","","truck");
	$sql="select* from comment";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		echo "<table>
<tr>
<th>Id</th>
<th>Email</th>
<th>Comment</th>
<th>Comment Time</th>
<th>Deleted</th>
<th>DeletedTime</th>
</tr>";
		while($row=mysqli_fetch_array($result)){
			 echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
   echo "<td>" . $row['comment'] . "</td>";
    echo "<td>" . $row['CommentTime'] . "</td>";
     echo "<td>" . $row['deleted'] . "</td>";
      echo "<td>" . $row['DeleteTime'] . "</td>";
      echo "</tr>";
		}
		echo "</table>";
	}


	?>

</body>
</html>