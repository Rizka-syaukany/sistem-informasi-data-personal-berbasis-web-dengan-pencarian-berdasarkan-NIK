<?php
session_start();

include "koneksi.php";

$email = $_POST["email"];
$p = md5($_POST["password"]);

$sql = "select * from user where email='".$email."' and password='".$p."' limit 1";
$hasil = mysqli_query ($bansos,$sql);
$cek = mysqli_num_rows($hasil);

	if($cek > 0){
 
	$data = mysqli_fetch_assoc($hasil);
 
	if($data['role']=="1"){
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "1";
		header("location:admin/index.php");
	}else if($data['role']=="2"){
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "2";
		header("location:dinsos/index.php");
	}else{
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
?>