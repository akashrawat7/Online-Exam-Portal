<?php
 session_start();
 if(!isset($_SESSION['user'])){
	 header('location:question.php');
 }
 require('connect.php');
 ?>
<html lang=en>
	<head>
		<title>
		project
		</title>
		<meta charset=utf8>
		<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="oep.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</head>
	<body>
	
	<div style="background-color:lightgreen">
	<div class="col-sm-12">
	<div class="float-sm-right"><a href="Logout.php" class="btn btn-danger" role="button">Logout</a></div>
	
	</div>
	</div>
	<div class="jumbotron text-center" style="color:darkgreen; background-color:lightgreen">
  <h1> COMPUTER SCIENCE EXAM RESULT </h1><br>
	</div>
	<div class="container">
	
		  	<div class="card bg-success">
	<div class="card-header">
	
	<div class="card-body">
	 
	</div>
	
	</div>
	
	</div>
	
	
	
	 <div class="card bg-success">
	<div class="card-header ">
	
	<div class="card-body">
	
	</div>
	
	</div>
	
	</div>
	 
	 

	
	
	</div>
	
	
	
	
	
	
	
	
	</body>
	</html