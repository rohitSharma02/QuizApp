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
} else {
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
		<style>
		 .jumbotron {
	        background-image: url(log.jpg); 
			color:white;
			min-height:700px;
			margin-top: 0px;
			margin-bottom:8px;
        }
		.btn {
			margin-top: 33%; 
		}
		</style>
	</head>
	<body style="background-color:gray">
		<div class = "container" align = "center" >
		    <div class="col-md-12 jumbotron">
				<a href="student.php" class="btn btn-info" role="button">Log In</a>
		    </div>				
		</div>
	</body> 
 </html> 
<?php
}?>