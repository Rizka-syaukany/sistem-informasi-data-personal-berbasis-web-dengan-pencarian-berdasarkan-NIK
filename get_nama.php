<?php 
include 'koneksi.php';

$kelurahan = $_POST['kelurahan'];
$no= 1;
$nama =$_POST['nama'];
echo $nama;
$query = "SELECT * FROM penduduk WHERE id_alamat=? ORDER BY Nama_penduduk ASC";
	// $query = "SELECT * FROM alamat where id_provinsi=13 ORDER BY nama ASC";
	$dewan1 = $bansos->prepare($query);
	$dewan1->bind_param("i", $kelurahan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
    while ($row = $res1->fetch_array()) {
		echo "<tr>";
        echo "<th scope='row'>".$no++."</th>";
        echo "<td >".$row['nama_penduduk']."</td>";
        echo "<td >".$row['umur']."</td>";
        echo "<td >".$row['agama']."</td>";
        echo "</tr>";
	}
?>