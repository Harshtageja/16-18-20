<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
		}
		.a{
			background-color: rgb(0,0,0,0.5);
			margin-left: 350px;
			align-content: center;
			text-align: center;
			margin-right: 350px;


		}
		.input{
			
			border: none;
			outline: none;
			border-bottom: 2px solid red;
			width: 80%;
			padding: 12px 20px;
			margin-top: 30px;
			box-sizing: border-box;
			background: transparent;
			color: white;
			font-size: 20px;

			text-align: center;
		}
		.button{
			background-color: rgba(255,255,255, 0.05); /* Green */
  border: none;
  color: white;
  padding: 7px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  margin-right: 30px;

		}
		.button:hover{
			 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		}
	</style>
	<title></title>
</head>
<body style="background-image: url('3.jpeg.jpg');">
	<br>
	<br>
	<br>
	<br>
	<br>
		<br>
	<br>
	<br>
	<br>
	<br>
		<br>
	<br>
	<br>
	<br>
	<br>
	<div class="a">
	<form action="http://localhost/commands.php" method="post">
		<input class="input" type="text" name="command"><br><br><br>
		<pre style="text-align: center;"><button type="submit" class="button">Execute</button></pre>
		<?php	echo "<input class='input' type='text' style='display:none;margin-bottom:0px;margin-top:0px;' name='open' value=".$_POST['open']."><br><br><br>"
?>
	</form>
</div>

<?php
echo "<script>alert('".$_POST['open']."opened')</script>";
?>
</body>
</html>