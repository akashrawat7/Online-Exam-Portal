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
	<div class="container">
		<div class="float-sm-right"><a href="Logout.php" class="btn btn-danger" role="button">Logout</a></div>
	<div class="float-sm-left"><a href="work.php" class="btn btn-danger" role="button">BACK</a></div><br>
	<br><br>
  <h2>ADD QUESTION!!</h2>
  <form action="admin1.php" method="post">
    <div class="form-group">
	 <div class="form-group">
      <label for="text">ID:</label>
      <input type="text" class="form-control" id="id" placeholder="Enter Question number" name="qid" autocomplete="off" required>
    </div>
     <div class="form-group">
      <label for="text">Question:</label>
      <input type="text" class="form-control" id="que" placeholder="Enter Question" name="que" autocomplete="off" required>
    </div><div class="form-group">
	
	<?php
	$s = "select * from subject ";
    $exe= mysqli_query($con,$s);
      	
		
	?>
	
  <label for="sel1">Select Question Subject:</label>
  <select class="form-control" id="sel1" name="qsub" required>
        <?php
		 if(mysqli_num_rows($exe)>=1){
			
      while($data = mysqli_fetch_assoc($exe)){
		  ?>
    <option><?php echo $data['subname']; ?></option>
	<?php
		}
		 }
		?>
  </select>
</div> <div class="form-group">
      <label for="text">Option 1:</label>
      <input type="text" class="form-control" id="ans1" placeholder="Enter Option 1" name="ans1" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Option 2:</label>
      <input type="text" class="form-control" id="ans2" placeholder="Enter Option 2" name="ans2" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Option 3:</label>
      <input type="text" class="form-control" id="ans3" placeholder="Enter Option 3" name="ans3" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Option 4:</label>
      <input type="text" class="form-control" id="ans4" placeholder="Enter Option 4" name="ans4" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Correct Option Number:</label>
      <input type="number" class="form-control" id="ans_corr" placeholder="Enter Correct Answer Number" name="corr_ans" autocomplete="off" required>
    </div>
    <button type="submit" class="btn btn-primary" name="click">Submit</button><hr>

  </form>
</div>
	  </body>
	  </html>
	  <?php
	  if(isset($_POST['click'])){
		 $id = $_POST['qid'];
		$question = $_POST['que'];
		$subj = $_POST['qsub'];
        $opt1 = $_POST['ans1'];
		$opt2 = $_POST['ans2'];
		$opt3 = $_POST['ans3'];
		$opt4 = $_POST['ans4'];
		$opt_corr = $_POST['corr_ans'];
		$ins = "insert into quizz(id, sub, ques, ans1 , ans2 , ans3 , ans4, corr_ans) VALUES ('$id','$subj','$question','$opt1','$opt2','$opt3','$opt4','$opt_corr')";
		$ins_data = mysqli_query($con, $ins);
		if($ins_data){
			echo "<script> 
				 alert('Data Inserted succesfully!! click ok!');
				 window.open('work.php','_self');
				 </script>";
		}
	  }
	  ?>
	  
