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
  <h1> COMPUTER SCIENCE EXAM RESULT </h1><hr><br>
	</div>
	<div class="container"><br><br>
                  <?php
	$res = 0;
	  if(isset($_POST['submit'])){
	  
	  if(!empty($_POST['quizcheck'])){
		  
		  $count = count($_POST['quizcheck']);
		  ?>                                                
 <table class="table table-dark table-hover text-center ">
    <thead>
      <tr>
        <th colspan="3"><b><h1>RESULT</h1></b></th>
        
      </tr>
    </thead><hr>
    <tbody>
      <tr>
        <td colspan="2">Total Question Attempt</td>
        
        <td><?php
	  echo "Out Of 10, You have Attempt " .$count. " Questions";?></td>
      </tr>
	  <?php
	  error_reporting(0);
     $selected = $_POST['quizcheck'];
	 $quer = "select * from quizz";
	 $i=1;
	 $r = mysqli_query($con , $quer);
	 
	 while($new = mysqli_fetch_assoc($r)){
		$flag = $new['corr_ans'] == $selected[$i];
		 if($flag == true){
		
		 $res++;
		 }
	
		$i++;	 
		 
		
	 }
	 ?>
	  
      <tr>
        <td colspan="2"> Total score</td>
        
        <td> <?php
	  	 echo"Your Score Is " .$res;
		 }
		 else{
			echo "<h3>Next Time Attempt Atleast One Question!!<h3>";
		}
		}
		 ?></td>
      </tr>
   
    </tbody>
  </table>

	 
	

	<?php
	 
	$name=$_SESSION['user'];
	$qry = "INSERT INTO `user`(`username`, `totalque`, `anscorrect`) VALUES ('$name','10','$res')";
	$rslt = mysqli_query($con, $qry);
	
	
	
	 ?>
	 
	
	</div>
	
	
	<div class="card-footer">
	<div class="col-sm-12 text-center">
	<b><h4>copyright &copy; Akash Rawat</h4></b>
	</div>
     </div>
	
	
	
	
	
	</body>
	</html