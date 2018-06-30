<?php

session_start();
 if(!isset($_SESSION['uid'])){
	 header('location:admin.php');
 }

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
	</body>
	<div class="container-fluid"><br>
	<div class="container-fluid">
	<div class="float-sm-right"><a href="Logout.php" class="btn btn-danger" role="button">Logout</a></div>
	<div class="float-sm-left"><a href="work.php" class="btn btn-danger" role="button">BACK</a></div><br><br>
  <h2>Enter Subject Name Related To the Question Which You Want TO Edit!!</h2><hr>
<form action="search.php" method="post">
  <div class="form-group">
    <label for="letter">Enter Subject Name:</label>
    <input type="text" class="form-control" id="word"  name="cat"  autocomplete="off" placeholder="Enter Subject Name Related To the Question Which You Want TO Edit"  required>
  </div>
  <button type="submit" class="btn btn-primary" name="click">Submit</button>
</form>
</div><hr><br>
<div id="scroll">
  <div  class="table-responsive table-dark">
    <table  class="table-dark">
      <thead>
        <tr class="table" >
          <th>ID</th>
		  <th>Subject</th>
          <th>Question</th>
          <th>Opt1</th>
          <th>Opt2</th>
          <th>Opt3</th>
          <th>Opt4</th>
          <th>Option correct</th>
          <th>Edit</th>
        </tr>
      </thead>
	<?php
		error_reporting(0);
	   require('connect.php');
	  if(isset($_POST['click'])){
		  $name = $_POST['cat'];
		  $q = "SELECT * FROM `quizz` where sub = '$name'";
		  $result = mysqli_query($con, $q) or die(mysqli_error($con));
		  if(mysqli_num_rows($result)>=1){
			   while($data = mysqli_fetch_assoc($result)){
				   ?>
			   <tbody>
        <tr class="table">
		  <td><?php echo $data['id'] ?></td>
		  <td><?php echo $data['sub'] ?></td>
          <td><?php echo $data['ques'] ?></td>
          <td><?php echo $data['ans1'] ?></td>
          <td><?php echo $data['ans2'] ?></td>
          <td><?php echo $data['ans3'] ?></td>
          <td><?php echo $data['ans4'] ?></td>
          <td><?php echo $data['corr_ans'] ?></td>
		  <td><a href="admin2.php?sid=<?php echo $data['id']; ?>" class="btn btn-danger" role="button">Edit</a></td>
		<?php
			   }
		  }
			else{
			?>
			<td colspan="7" align="center">
			  <?php
			echo "<h1> NO RECORD FOR THIS TYPE OF WORDS!!</h1>";?>
			</td>
			</tr>
			<?php	   
			   }			
	  }
	 ?>
      </tbody>
    </table>
  </div>
  </div>
</div>
</body>
</html>
