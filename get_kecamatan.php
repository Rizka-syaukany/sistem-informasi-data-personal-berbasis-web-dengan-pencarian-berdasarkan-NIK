<?php
	include 'koneksi.php';
	$kabupaten = $_POST['kabupaten'];
 
	echo "<option value=''>Piilih Kecamatan</option>";
 
	$query = "SELECT DISTINCT alamat.id_kecamatan,kecamatan.nama_kecamatan FROM alamat INNER JOIN kecamatan ON alamat.id_kecamatan=kecamatan.id_kecamatan AND alamat.id_kabkota=?";
	// $query = "SELECT * FROM alamat where id_provinsi=13 ORDER BY nama ASC";
	$dewan1 = $bansos->prepare($query);
	$dewan1->bind_param("i", $kabupaten);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_kecamatan'] . "'>" . $row['nama_kecamatan'] . "</option>";
	}
?>