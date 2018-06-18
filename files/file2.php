 <?php	  
session_start();	 
	   require('connect.php');
	 
	  if(isset($_POST['log']));{
		  $name = $_POST['username'];
		  $password = $_POST['passw'];
		  $q = "select * from signin where name = '$name' and password = '$password' ";
	      
		  $result = mysqli_query($con, $q) or die(mysqli_error($con));
		  $count = mysqli_num_rows($result);
		  if($count == 1){
			  echo"<h1> This Name Already Exist try New</h1>";
			  ?>
			  
			 <h2> click Here To Signup With new Name and Password</h2><a href="signup.php">CLICK HERE</a>
			<?php
		  }
		  else{
			  $query = "insert into signin(name, password) values ('$name','$password')";
			  mysqli_query($con, $query);
			  header('location:login.php');
		  }
	
	  }
	  ?>