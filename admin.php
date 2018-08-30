<!DOCTYPE HTML>
<?php 
require("s_core.php");
require("t_core.php");

if(student_loggedin()){
	echo "Redirecting...";
	header('Location: student/index.php ');
} else if(admin_loggedin()){
	echo "Redirecting...";
	header('Location: admin/index.php ');
} else{
?>
<html> 
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title>Quiz Sign In</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body id="body-color"> 
		<div id="Sign-In">
			<div class = "container">
				<div class="jumbotron row">
					<div class = "col-md-4" align = "center">
						<img src="logo1.jpg" class="img-responsive">
					</div>
					<div class = "col-md-8" align = "center">
						<p style="font-size:36px">Krishna Institute of Engineering and Technology</p>
						<p style="font-size:16px">"Shaping Your Minds with Skill Oriented And Value Based Education"</p>
					</div>
			    </div>	
			</div>
			<div class = "container" align = "center">
				<fieldset style="width:30%">
				<legend>ADMIN LOG-IN</legend>
				<form method="POST" action="tconnectivity.php"> 
					<div class="form-group">
						<label for="usr">Admin ID</label>
						<input type="text" class="form-control" name = "user"><br>
						<label for="pwd">Password</label>
						<input type="password" class="form-control" name = "pass"><br>
					    <input type="submit" class="btn btn-success" value="Log-In" name = "submit">
						<a href="student.php" class="btn btn-info" role="button">Go to Student Panel</a>
					</div>
				</form>
				</fieldset> 
			</div>
		</div>
	</body> 
 </html> 
<?php 
}?>