<?php 
include "function.php";
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysqli_query("SELECT * FROM user where username='$username' and pasword='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:user/indexuser.php");
}else{
	header("location:index.php");	
}
?>