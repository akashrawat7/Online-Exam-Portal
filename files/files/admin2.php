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
	</head>
	
	<body>
	<div class="container">
		<div class="float-sm-right"><a href="Logout.php" class="btn btn-danger" role="button">Logout</a></div>
	<div class="float-sm-left"><a href="search.php" class="btn btn-danger" role="button">BACK</a></div><br>
	<br><br>
  <h2>EDIT QUESTION!!</h2>
  
  <?php
	   require('connect.php');
	   error_reporting(0);
	 $sid = $_GET['sid'];
	   
		  $q = "SELECT * FROM `quizz` where id ='$sid'";
	   
		  $result = mysqli_query($con, $q) or die(mysqli_error($con));
			   $data = mysqli_fetch_assoc($result);
	  
				   ?>
				   
				   
  <form action="admin2.php" method="post">
    <div class="form-group">
	 <div class="form-group">
      <label for="text">ID:</label>
      <input type="text" class="form-control" id="id"  value = "<?php echo $data['id']; ?>" name="qid" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Question subject:</label>
      <input type="text" class="form-control" id="sub"  value = "<?php echo $data['sub']; ?>" name="qsub" autocomplete="off" required>
    </div>
     <div class="form-group">
      <label for="text">Question:</label>
      <input type="text" class="form-control" id="que" value = "<?php echo $data['ques']; ?>"  name="que" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Option 1:</label>
      <input type="text" class="form-control" id="ans1"  value = "<?php echo $data['ans1']; ?>" name="ans1" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Option 2:</label>
      <input type="text" class="form-control" id="ans2"  value = "<?php echo $data['ans2']; ?>"  name="ans2" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Option 3:</label>
      <input type="text" class="form-control" id="ans3" value = "<?php echo $data['ans3']; ?>"  name="ans3" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Option 4:</label>
      <input type="text" class="form-control" id="ans4"  value = "<?php echo $data['ans4']; ?>"  name="ans4" autocomplete="off" required>
    </div> <div class="form-group">
      <label for="text">Correct Option Number:</label>
      <input type="number" class="form-control" id="ans_corr"  value = "<?php echo $data['corr_ans']; ?>" name="corr_ans" autocomplete="off" required>
   </div> <div class="form-group">
      
      <input type="hidden" id="hidden"  name="sid" value="<?php echo $data['id']; ?>" autocomplete="off" required>
    
	
    <button type="submit" class="btn btn-primary" name="click" >Update</button><hr>

  </form>
</div>

	 
	  </body>
	   <?php
 
	  
	  if(isset($_POST['click'])){
		 $id = $_POST['qid'];
		$question = $_POST['que'];
        $opt1 = $_POST['ans1'];
		$opt2 = $_POST['ans2'];
		$opt3 = $_POST['ans3'];
		$opt4 = $_POST['ans4'];
		$sid = $_POST['sid'];
		$opt_corr = $_POST['corr_ans'];
		
		$update = "UPDATE `quizz` SET `id`= '$id',`ques`='$question',`ans1`='$opt1',`ans2`='$opt2',`ans3`='$opt3',`ans4`='$opt4',`corr_ans`='$opt_corr' WHERE id = '$sid';";
		$update_data = mysqli_query($con, $update);
		if($update_data == true){
			echo"<script>
	 alert('Data Updated Succesfully');
	 </script>";
	header('refresh:1','location:admin2.php');
		}
		else{
			echo"<script>
	 alert('There is Something Wrong');
	
	window.open('admin2.php');
	 </script>";
		}
	  
	  }
	  
	  ?>
	  

	  </html>