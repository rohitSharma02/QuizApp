<?php 
include("Includes/db_conn.php");
require("s_core.php");

function SignIn() {
global $dbc;
if(!empty($_POST['user']))
{ 
$check ="SELECT * FROM User where userName = '$_POST[user]' AND pass = '$_POST[pass]'";
$query = mysqli_query($dbc,$check) or die(mysqli_error()); 
$row = mysqli_fetch_array($query) or die("sorry you entered wrong password" .mysqli_error($dbc));
if(!empty($row['userName']) AND !empty($row['pass'])) { 
$_SESSION['userName'] = $row['userName']; 
echo "<script>window.open('student/index.php','_self')</script>";
}
else { 
echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
}
} 
}
if(isset($_POST['submit'])) 
{ 
SignIn(); 
}
?>