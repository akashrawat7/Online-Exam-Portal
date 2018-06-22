<?php
session_start();
 if(!isset($_SESSION['uid'])){
	 header('location:admin.php');
 }
?>
<?php
require('connect.php');
			$id= $_REQUEST['sid'];
			$sqll= "delete from quizz where id = '$id'";
			$quer= mysqli_query($con, $sqll) or die('unable to connect');
			if($quer == true){
				?>
				<script> 
				 alert('post deleted succesfully!! click ok!');
				 window.open('work.php','_self');
				 </script>
				 <?php
			}

?>