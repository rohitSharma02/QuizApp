<?php 
ob_start();
@session_start();

function admin_loggedin() {
	if(isset($_SESSION['adName']) && !empty($_SESSION['adName'])){
		return true;
	} else{
		return false;
	}
}
?>