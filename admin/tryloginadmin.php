<?php
include "../koneksi.php";
session_start();
$user=$_POST["Useradmin"];
$pass=md5($_POST["Password"]);
$sql="SELECT * from 'admin' where useradmin='$user' and 'pasword'='$pass'";
$hasil=$conn->query($sql);
if ($hasil->num_rows>0){
	$_SESSION['useradmin']= $user;
	header("location:indexadmin.php");
	$conn->close();
}else{
	$conn->close();
	header ("location:login.php?pesan=gagal");
}
?>