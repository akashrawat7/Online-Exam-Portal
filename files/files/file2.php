 <?php	  
session_start();	 
	   require('connect.php');
	  if(isset($_POST['log']));{
		  $name = $_POST['username'];
		  $password = $_POST['passw'];
		   $repassword = $_POST['repass'];
		    $email = $_POST['email'];
		  $q = "select * from signin where name = '$name' AND password = '$password'";
		  $result = mysqli_query($con, $q) or die(mysqli_error($con));
		  $count = mysqli_num_rows($result);
		  if($count == 1){
			  echo"<h1> This Name Already Exist try New</h1>";
			  ?>
			 <h2> click Here To Signup With new Name and Password</h2><a href="signup.php">CLICK HERE</a>
			<?php
		  }
		
		  else if($password==$repassword){
			  $query = "insert into signin(name, password, repassword, email ) values ('$name', '$password' ,'$repassword' ,'$email')";
			  mysqli_query($con, $query);
			 echo "<script> 
				 alert('You Signed UP succesfully!! click ok!');
				 window.open('login.php','_self');
				 </script>";
		  }
		  else{
			   echo"<h1> Password Not Matched Try Again</h1>";
			  ?>
			 <a href="signup.php">CLICK HERE</a>
			 <?php
		  }
	
	  }
	  ?>
	  
	  
	  
	  
	  