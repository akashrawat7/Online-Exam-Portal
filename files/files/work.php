<?php

session_start();
 if(!isset($_SESSION['uid'])){
	 header('location:admin.php');
 }

?>
<?php
require('connect.php');
?>
<!DOCTYPE html>
<html lang=en>
	<head>
		<title>
		project
		</title>
		<meta charset=utf8>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="oep.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</head>
	<div class="container-fluid">
	<div class="float-sm-right"><a href="Logout.php" class="btn btn-danger" role="button">Logout</a></div>
	<div class="card-deck">
	<div class="col-sm-6">
  <div class="card  d-block" style="width:400px">
    <img class="card-img-top bg-info" src="../pics/admin.png" alt="Card image" style="width:100%; height:350px;">
    <div class="card-body bg-warning">
      <h4 class="card-title">ADMIN PAGE ONLY!</h4>
      <p class="card-text">WELCOME MR. AKASH</p>
     
    </div>
	</div>
	
  </div>
  <div class="col-sm-6">
    
    <div class="card-body bg-warning">
      <h4 class="card-title"><a href="admin1.php" class="btn btn-success">ADD QUESTION</a></h4>
      <p class="card-text">CLICK HERE TO ADD QUESTION!</p>
     
    </div><hr>
	
	<div class="card-body bg-warning">
      <h4 class="card-title"><a href="search.php" class="btn btn-success">EDIT QUESTION</a></h4>
      <p class="card-text">CLICK HERE TO EDIT QUESTION!</p>
     
    </div><hr>
	
	  <div class="card-body bg-warning">
      <h4 class="card-title"><a href="admin3.php" class="btn btn-success">DELETE QUESTION</a></h4>
      <p class="card-text">CLICK HERE TO DELETE QUESTION!</p>
     
    </div><hr>
	
	<div class="card-body bg-warning">
      <h4 class="card-title"><a href="admin4.php" class="btn btn-success">ADD NEW SUBJECT</a></h4>
      <p class="card-text">CLICK HERE TO ADD SUBJECT!</p>
     
    </div><hr>
	
	</div>
 
  
  
  </div>
  </div> <br><br><br> <br><br><br>
  <div class="col-sm-12">
	<font color="black"><b><h4>copyright &copy; Akash Rawat</h4></b></font>
	</div>
	</div>
	
	</html>