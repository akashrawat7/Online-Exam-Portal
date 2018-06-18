<!DOCTYPE html>
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
	</body>
	<div class="float-sm-left"><a href="login.php" class="btn btn-danger" role="button">BACK</a></div>
	<h1 style="font-family:arial; color:brown;"><center>This Page Is Only For Admin</center></h1><hr><br><br><br>
	
			<div class="container" style="background-color:khaki;">
			
  <h2>ADMIN LOGIN</h2><hr>
  <form action="admin.php" method="post">
    <div class="form-group" >
      <label for="name">ADMIN NAME:</label><br>
      <input type="text" class="form-control" id="username" placeholder="Enter Name" name="name" autocomplete="off" required>
    </div>
    <div class="form-group"><br>
      <label for="pass">PASSWORD:</label><br>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
    </div>
    <br>
    <input class="button1" type="submit" name="ck" value="submit">
  </form>
  </div><br><br><br><br>
  		<?php

require('connect.php');




if(isset($_POST['ck'])){
 
  $user = $_POST['name'];
  $pass = $_POST['pass'];
  $query = "select * from adminlogin where adminname = '$user' and password = '$pass'";
  $res = mysqli_query($con, $query) or die(mysqli_error($con));				
  $count = mysqli_num_rows($res);
  if($count < 1)
  {	  
	 echo"<script>
	 alert('invalid Login Credentials');
	 </script>";
	header('refresh:1','location:admin.php');
  }
else{
		  $data=mysqli_fetch_assoc($res);
	  
	 session_start();
	 $_SESSION['uid']=$user;
	 header('location:work.php');
    }
}
	?>		

<div class="col-sm-12">
	<font color="black"><b><h4>copyright &copy; Akash Rawat</h4></b></font>
	</div>	
	</body>
	</html>
	