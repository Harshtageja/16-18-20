<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
	<style type="text/css">
		img.c{
			width:100px;
			margin-left:100px;
			margin-top: 0px;
			display:inline-block;
			background: transparent;
		}
		a{
			background-color:white;
			border-style:none;
			font-size:20px;
			text-decoration: none;
			color: black;
		}
		@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}

/* Media Queries: Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}
		a:hover{
			color:#81D4FA;
			cursor:pointer;
		}
		.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  border-radius: 20px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  background-color: transparent;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: blue;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;
  	background-color: black;}
}
		.truck{
			height: 100px;
			position: fixed;
			left: -150px;
			top:80%;
			animation: mymove 8s linear infinite;
		}
		@keyframes mymove {
	40%,70%{
		left: 55%;
	}
  100%{
  	left:100%;
  }
}
.man{
	height: 100px;
	position: fixed;
	top:80%;
	left:48%;	
	z-index: 1;
	opacity: 0;
	animation: man 8s linear infinite;
}
@keyframes man{
	0%,40%{
		opacity: 0;
	}
	50%,70%{
		opacity:1;
	}
	80%{
		opacity: 0;
	}
	
}
.man2{
	height: 75px;
	position: fixed;
	top:82%;
	left:48%;	
	z-index: 1;
	opacity: 0;
	animation: man2 8s linear infinite;
}
@keyframes man2{
	0%,40%{
		opacity: 0;
	}
	50%,70%{
		opacity:0;
	}
	80%,90%{
		opacity: 1;
		height:120px;
		top:78%;
	}
	
}
.bag{
	height: 25px;
	position: fixed;
	top: 85%;
	left:50%;
	animation: bag 8s linear infinite;
}
@keyframes bag{
0%,40%{
	opacity: 0;
}
50%{
	opacity: 1;
}
60%{
	opacity: 0;
	left: 56%;
}
60%,100%{
	opacity: 0;
	left:56%;
}
}
.bag2{
	height: 25px;
	position: fixed;
	top: 85%;
	left:45%;
	animation: bag2 8s linear infinite;

}
@keyframes bag2{
0%,40%{
	opacity: 0;
	left: 52%;
}
50%,60%{
	opacity: 1;
	left:52%;
}
70%{
	opacity: 0;
	left:56%;
}
70%,100%{
	opacity: 0;
	left:56%;
}
}
.b{
	background-image: url('truckback.jpg');
	background: all;
	background-size: 1500px;
	text-align: center;
	width: 100%;

}
h2{
	color: white;
	font-size: 60px;
	text-align: center;
}
button{
	width: 300px;
	height:50px;
	background-color: rgb(1,1,1,0.2);
	border:none;
	color: white;
	font-size: 30px;
	font-weight: bolder;
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: rgba(1,1,1,0.2);
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 2;
  top:120%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: " ";
  position: absolute;
  bottom:100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent black transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

	</style>
	<title></title>
</head>
<body >
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" onclick="document.forms['updateprofile'].submit()">Update Profile</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Track orders</a>
  <a href="#">Contact</a>
</div><div style="position: sticky;top: 0%;background-color: white;padding-bottom: 10px;padding-top:0px;margin-top: 0px;"><span style=" position:absolute;left:97%;top:50%;  font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><pre><img src="logo.png" class="c">                    <a href="">Search For a Driver</a >        <a href="http://localhost/searchforsender.php">Search for a Sender</a>                                   </pre><a href="" style="font-size: 25px; margin-right:0px;  color: rgb(0,0,0,0.2);cursor: default;position:absolute;top:35%;left:77%;">Logged in </a><?php
$conn= new mysqli("localhost","root","","truck");
	if(!$conn){
		echo $conn->error;
	}
	$sql="select image,FirstName from truck where Email='".$_POST['Email']."'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){?>
			<img width="100px" height="100px" style="position:absolute;top:20%;left:88%; border-radius:10px;  margin-left: 0px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']);?>">
			<?php
		}
	}


?>
</div>
<div class="b">
	<h2>Wanna a send something to your closed ones?</h2>
	<h3 style="color: white;font-weight: lighter;font-size: 25px"> But can't rely over courier then here are we.</h3>
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

<script>
	var a=0;
function openNav() {
	if(a==0){
  document.getElementById("mySidenav").style.width = "250px";
a=1;
}
else{
	document.getElementById("mySidenav").style.width = "0";
	a=0;

}
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  a=0;
}

</script>
<div class="tooltip">
 <button onclick=not()><b>Sender</b></button> <div class="tooltiptext">Willing to send something</div></div>
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
		 <div class="tooltip">
 <button><b>Driver</b></button> <div class="tooltiptext">Do you have Some space for our luggage</div></div>
<img class="truck" src="truck.png">
<img class="bag" src="bag.png">
<img class="bag2" src="bag.png">
<img class="man" src="man1.png">
<img class="man2" src="man2.png">
<form method="POST" action="sender.php" name="member_signup"> 
<?php 
echo("<input type='text' name='Email' style='display:none' value=".$_POST['Email'].">");
if(!$_POST['Email']){
 echo "<script>alert('Please login First')
 window.location.href = 'http://localhost/pr2-1.php'

 </script>";
}
 ?>
</form>
<script>
function not(){
	 document.forms['member_signup'].submit();
}
</script>
<form action="trial.php" method="post" name="updateprofile">
<?php
	echo "<input readonly type='text' style='display:none' name='Email' value='".$_POST['Email']."'>";
?>
</form>
</body>
</html>