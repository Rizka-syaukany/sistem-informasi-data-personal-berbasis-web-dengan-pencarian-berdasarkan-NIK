<?php
	include 'koneksi.php';
	$provinsi = $_POST['provinsi'];
 
	echo "<option value=''>Pilih Kabupaten/Kota</option>";
	
	$query = "SELECT DISTINCT alamat.id_kabkota,kabkota.nama_kabkota FROM alamat INNER JOIN kabkota ON alamat.id_kabkota=kabkota.id_kabkota AND alamat.id_provinsi=?";
	// $query = "SELECT * FROM alamat where id_provinsi=13 ORDER BY nama ASC";
	$dewan1 = $bansos->prepare($query);
	$dewan1->bind_param("i", $provinsi);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kabkota'] . "'>" . $row['nama_kabkota'] . "</option>";
	}
?>