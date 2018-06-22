<?php
 session_start();
 if(!isset($_SESSION['user'])){
	 header('location:login.php');
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
	<div class="jumbotron text-center" style="color:darkgreen; background-color:yellow">
  <h1> Welcome <?php echo $_SESSION['user']; ?> </h1><br><h3>Choose Any One Subject !!</h3>
	</div>
              <div class="container">
            <?php
			$query="select * from subject";
			$sho=mysqli_query($con,$query);
			while($r= mysqli_fetch_assoc($sho)){
				?>
				<form method = "post" action="question.php">
				<div class="col-md-12 d-block">
				<div class="card-footer bg-muted">
				<input type="radio" value="<?php echo $r['subname'] ?>" name="subcheck[1]" required>
				<input type="hidden" value="<?php echo $r['subname'] ?>" name="selected" required>
				<?php echo $r['subname'] ?>
				</div>
				</div>
			<?php	
			}
		?>						
       <br>   <input type="submit" class="btn btn-danger" name="ck" value="Submit">
				</form>
<br><br>
	   </div><br><br>
	<div class="card-footer">
	<div class="col-sm-12 text-center">
	<b><h4>copyright &copy; Akash Rawat</h4></b>
	</div>
     </div>
	</body>
	</html>