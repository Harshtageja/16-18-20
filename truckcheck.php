<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	 <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color: black;color: black;">
  <a class="navbar-brand" href="#" style="background-color: black;font-size: 25px;">BB Trucks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: black">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="text-align: right;background-color: black">
    <div class="navbar-nav" style="background-color: black">
      <a class="nav-link active " href="#" style="margin-left: 300px;">About Us<span class="sr-only">(current)</span></a>
      <a class="nav-link active"  href="#" style="margin-left: 50px;">How it works</a>
      <a class="nav-link active" href="#" style="margin-left: 50px;">Donate Us</a>

   <a class="nav-link active" href="http://localhost/pr2-3.php" style="margin-left: 100px;">Logout</a>
   <a class="nav-link active" href="#" onclick="document.forms['home'].submit()" style="margin-left: 300px;" onMouseOver="this.style.color='yellow'"
        onMouseOut="this.style.color='white'">Home</a>
     
    </div>
  </div>
</nav>
<div style="text-align: center;margin-top: 100px;">
  <div class="row">
  <?php 
$conn= new mysqli("localhost","root","","truck");
$sql="select d.Pickup as p ,d.Destination as de,i.image as image from driver as d inner join truck as t on d.Email=t.Email inner join images1 as i on t.image=i.id  where d.verify='verified'";
 $result=$conn->query($sql);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){?>
        <div class="col-sm-6">
       <div class="card" style="width: 18rem;padding-bottom: 50px;padding-top: 20px; margin-left: 100px;height: 200px;background-color: #DCDCDC">
  <img class="card-img-top" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']);?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">From : <?php echo $row['p'] ?></h5>
     <h5 class="card-title">To :  <?php echo $row['de'] ?></h5>
    <button href="#" type="submit" class="btn btn-dark" style="background-color: black;border-radius:10px">Message</button>
  </div>
</div>
</div>
       <?php
    }
  }
  else{
  echo $conn->error;
  ?>
  <form action="http://localhost/pr2-4.php" method="post">
	<input type="text" name="Email" style="display: none;" value="<?php echo($_POST['Email']) ?>">
    <h1 style="margin-top: 20%;text-align: center;">No Truck Available For this route</h1><br><br>
    <button type="submit" class="btn btn-dark" style="background-color: black;">Back to Home Page</button>
</form>
<?php
}
?>

</div></div>
  <form name="home" action="pr2-4.php" method="post">
          <input type="text" style="display: none;" name="Email" value="<?php echo $_POST['Email'] ?>">
        </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>