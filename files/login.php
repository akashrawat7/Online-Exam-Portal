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
	<body style="background-image:url('../pics/oepp.jpg');">
	<div class="container-fluid-center" >
		<div  class="col-sm-12" id="header">
		<font face="Comic Sans MS" color="khaki"><hr> ONLINE &nbsp;EXAM&nbsp;PORTAL</hr></font>
		</div>
	</div><br><br><br><br>

	<center><div class="container-fluid-center" style="background-color:khaki; width:350px; text-align:center;">
	<div class="col-sm-12" id="form">
	<form action="file1.php" method="post">
	
		<div class="form-group"><br>
			<label for="user"><b>Username:</b></label>
			<input type="text" class="form-control" name="user" placeholder="Enter Username" autocomplete="off" required>
		</div>
		<div class="form-group">
			<label for="pwd"><b>Password:</b></label>
		<input type="password" class="form-control" name="pwd"  placeholder="Enter Password" autocomplete="off" required>
		</div>
		<div class="sm-col-12">
		<b>If Not A Member Sign Up Here||<a href="signup.php">Sign Up</a></b>
			
		</div><br>
		<input class="button1" type="submit" name="log" value="Login">
	</form>
	</div></center>

	
	
	
	
	
	</div>
	<div class="col-sm-12">
	<font color="black"><b><h4>copyright &copy; Akash Rawat</h4></b></font>
	</div>
	<div class="float-sm-right"><a href="admin.php" class="btn btn-danger" role="button">Admin Login</a></div>
	
	
	</body>
	</html>
	
	
	
	
	
	
	
	
	
	
	
	