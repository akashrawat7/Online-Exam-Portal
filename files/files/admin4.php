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
		<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<div class="float-sm-right"><a href="Logout.php" class="btn btn-danger" role="button">Logout</a></div>
	<div class="float-sm-left"><a href="work.php" class="btn btn-danger" role="button">BACK</a></div><br>
	<br><br>
  <h2>ADD SUBJECT!!</h2>
  <form action="admin4.php" method="post">
     <div class="form-group">
      <label for="text">Question:</label>
      <input type="text" class="form-control" id="que" placeholder="Enter Subject" name="subjectname" autocomplete="off" required>
    </div>
    <button type="submit" class="btn btn-primary" name="click">Submit</button><hr>

  </form>
</div>
	  </body>
	  </html>
	  <?php
	  if(isset($_POST['click'])){
		 $subjectname = $_POST['subjectname'];
		$ins = "insert into subject( subname) VALUES ('$subjectname')";
		$ins_data = mysqli_query($con, $ins);
		if($ins_data){
			echo "<script> 
				 alert('Data Inserted succesfully!! click ok!');
				 window.open('work.php','_self');
				 </script>";
		}
		else{
			echo"SomeThing Wrong";
		}
	  }
	  ?>
	  
