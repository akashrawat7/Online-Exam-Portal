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
  <h1> Welcome <?php echo $_SESSION['user']; ?> </h1><br>You Have To Pick One Answer From Four Options!!
	</div>
              <div class="container">
			   <form method="post" action="check.php">
            <?php
            for($n=1; $n<11; $n++){
			$query="select * from quizz where id = $n";
			$show=mysqli_query($con,$query);
			while($res = mysqli_fetch_assoc($show)){
				?>
				
				<div class="col-md-12 d-block">
				<div class="card bg-warning">
				<div class="card-body">
				<div class=" card-header">
				<?php echo $res['ques'] ?>
				</div>
				
				<div class="card-footer">
				<input type="radio" value="1" name="quizcheck[<?php echo $res['id'] ?>]">
				<?php echo $res['ans1'] ?>
				</div>
				<div class="card-footer">
				<input type="radio" value="2" name="quizcheck[<?php echo$res ['id'] ?>]">
				<?php echo $res['ans2'] ?>
				</div>
				<div class="card-footer">
				<input type="radio" value="3" name="quizcheck[<?php echo $res['id'] ?>]">
				<?php echo $res['ans3'] ?>
				</div>
				<div class="card-footer">
				<input type="radio" value="4" name="quizcheck[<?php echo $res['id'] ?>]">
				<?php echo $res['ans4'] ?>
				</div>
				</div>
				</div>
				</div><br>
			<?php	
			}
			
		
			}
		
		?>						
         

          
<br><br>
           		  
               <input type="submit" class="btn btn-success m-auto d-block" name="submit" value="submit">
           </form>
     
	   </div><br><br>
	<div class="card-footer">
	<div class="col-sm-12 text-center">
	<b><h4>copyright &copy; Akash Rawat</h4></b>
	</div>
     </div>
	
	
	
	</body>
	</html>