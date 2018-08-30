<?php 
include("Includes/db_conn.php");
require("t_core.php");

function SignIn() {
global $dbc;
if(!empty($_POST['user']))
{ 
$check ="SELECT * FROM admns where adName = '$_POST[user]' AND pass = '$_POST[pass]'";
$query = mysqli_query($dbc,$check) or die(mysqli_error()); 
$row = mysqli_fetch_array($query) or die("sorry you entered wrong password" .mysqli_error($dbc));
if(!empty($row['adName']) AND !empty($row['pass'])) { 
$_SESSION['adName'] = $row['pass']; 
echo "<script>window.open('admin/index.php','_self')</script>";
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

