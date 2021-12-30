<?php
	include 'koneksi.php';
	$kecamatan = $_POST['kecamatan'];
 
	echo "<option value=''>$kecamatan</option>";
 
	$query = "SELECT DISTINCT kelurahan.nama_kelurahan,alamat.id_alamat FROM alamat INNER JOIN kelurahan ON alamat.id_kelurahan=kelurahan.id_kelurahan AND alamat.id_kecamatan=?";
	// $query = "SELECT * FROM alamat where id_provinsi=13 ORDER BY nama ASC";
	$dewan1 = $bansos->prepare($query);
	$dewan1->bind_param("i", $kecamatan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_alamat'] . "'>" . $row['nama_kelurahan'] . "</option>";
	}
?>