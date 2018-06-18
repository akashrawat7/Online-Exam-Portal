 <?php
	  session_start();
	   require('connect.php');
	 
	  if(isset($_POST['log']));{
		  $name = $_POST['user'];
		  $password = $_POST['pwd'];
		  $q = "select * from signin where name = '$name' and password = '$password' ";
	      
		  $result = mysqli_query($con, $q) or die(mysqli_error($con));
		  $count = mysqli_num_rows($result);
		  if($count == 1){
			 
			 $_SESSION['user'] = $name;
			 header('location:question.php');
		  }
		  else{
			  ?> 
			  <img src="../pics/wrong.png"> </img>
			
			  <?php
			echo"<h2>Wrong Name And Password Try Again!!</h2>";
			  ?>
			  <h4> Click Here For Try Again <a href="login.php"> &nbsp;&nbsp;CLICK HERE</a></h4>
			  <?php
		  }
	
	  }
	  ?>