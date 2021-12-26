<?php 
$db_host1 = 'localhost';
$db_user1 = 'root';
$db_pass1 = '';
$database1 = 'bansos';

//koneksi ke database
$bansos=new mysqli($db_host1, $db_user1, $db_pass1, $database1);

// if ($bansos->connect_error) { 
// 	die("<b>Yahh!  gagal</b> : " . mysqli_connect_error()); 
// } else { 
// 	echo "<b>Hore!  Berhasil</b>"; 
// }
?>