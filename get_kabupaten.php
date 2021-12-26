<?php
	include 'koneksi.php';
	$provinsi = $_POST['provinsi'];
 
	echo "<option value=''>".$provinsi."</option>";
 
	$query = "SELECT * FROM alamat where id_provinsi=13 ORDER BY nama ASC";
	$dewan1 = $bansos->prepare($query);
	$dewan1->bind_param("i", $provinsi);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kabkota'] . "'>" . $row['id_kabkota'] . "</option>";
	}
?>