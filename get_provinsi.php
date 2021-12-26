<?php
	include 'koneksi.php';
 
	echo "<option value=''>Pilih Provinsi</option>";
 
	$query = "SELECT * FROM provinsi ORDER BY nama_provinsi ASC";
	$dewan1 = $bansos->prepare($query);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_provinsi'] . "'>" . $row['nama_provinsi'] . "</option>";
	}
?>