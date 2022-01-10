<?php 
$db_host1 = "localhost";
$db_user1 = "root";
$db_pass1 = "";
$database1 = "bansos";

$bansos = mysqli_connect($db_host1,$db_user1,$db_pass1,$database1);
if (!$bansos){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>