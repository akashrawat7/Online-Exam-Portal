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
		ONLINE-EXAM-PORTAL
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
		 <link rel="shortcut icon" href="../pics/favicon.ico">
	</head>
	<body>
	<div style="background-color:lightgreen">
	<div class="col-sm-12">
	<div class="float-sm-right"><a href="Logout.php" class="btn btn-danger" role="button">Logout</a></div>
	 
	</div>
	</div>
	              <?php
				  error_reporting(0);
	$res = 0;
	  if(isset($_POST['submit'])){
		     $num=$_POST['num'];
		  $grp=$_POST['topic'];
	  if(!empty($_POST['quizcheck'])){
		  $count = count($_POST['quizcheck']);
		
		  ?>    
	<div class="jumbotron text-center" style="color:darkgreen; background-color:lightgreen">
  <h1> Your <?php echo $grp;?> Exam Result </h1><hr><br>
	</div>
	<div class="container"><br><br>
                                                
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
	   
	  echo  "Out Of " .$num. ", You have Attempt " .$count. " Questions";?></td>
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
        <td class="class="col-sm-12 m-auto d-block" > <?php
	  	 echo"Your Score Is " .$res;
		 }
		 else{
			echo "<h3><center>Next Time Attempt Atleast One Question!!</center><h3>";
		}
		}
		 ?></td>
      </tr>
       </tbody>
  </table>
	<?php
	$name=$_SESSION['user'];
	$topic=$_POST['topic'];
	$qry = "INSERT INTO `user`(`username`, `totalque`,attempt, sub, `anscorrect`) VALUES ('$name','$num','$count','$topic','$res')";
	$rslt = mysqli_query($con, $qry);
	 ?>
	</div><br><br>
	<div class="card-footer">
	<div class="col-sm-12 text-center">
	<b><h4>copyright &copy; Akash Rawat</h4></b>
	</div>
     </div>
	</body>
	</html>