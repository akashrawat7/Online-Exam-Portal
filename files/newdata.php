 
 <?php

session_start();
 if(!isset($_SESSION['uid'])){
	 header('location:admin.php');
 }

?>
 <?php
 require('connect.php');
	  
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
	 window.open('search.php','_self');
	 </script>";
	
		}
		else{
			echo"<script>
	 alert('There is Something Wrong');
	
	window.open('search.php','_self');
	 </script>";
		}
	  
	  }
	  
	  ?>
	  
