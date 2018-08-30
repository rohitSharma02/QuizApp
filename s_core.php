<?php 
ob_start();
@session_start();

function student_loggedin() {
	if(isset($_SESSION['userName']) && !empty($_SESSION['userName'])){
		return true;
	} else{
		return false;
	}
}
?>