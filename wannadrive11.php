<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$conn=new mysqli("localhost","root","","truck");
	$sql="update driver set Pickup='".$_POST['Pickup']."',Destination='".$_POST['Destination']."' where id='".$_POST['id']."'";
	$res=$conn->query($sql);
	if($res){
		?>
		 <form name="wannadrive3" action="wannadrive9.php" method="post">
                	<input type="text" name="id" value="<?php echo $_POST['id'] ?>">
                </form>
                <script type="text/javascript">
                	document.forms['wannadrive3'].submit();
                </script>

		<?php
	}
	?>

</body>
</html>