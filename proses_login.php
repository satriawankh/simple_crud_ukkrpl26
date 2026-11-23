<?php 
include "koneksi.php";
 
$username = $_GET['username'];
$password = $_GET['password'];
 
$sql = "select * from user where username='$username' and password='$password'";
$query = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($query);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php?login=berhasil");
}else{
	header("location:login.php?login=gagal");	
}
 
?>