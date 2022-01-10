<?php 
include 'koneksi.php';

$kelurahan = $_POST['kelurahan'];
$no= 1;
// $nama =$_POST['nama'];
// echo $nama;
// $query = "SELECT * FROM penduduk WHERE id_alamat=? ORDER BY Nama_penduduk ASC";
// $query = "SELECT * FROM penduduk INNER JOIN bantuan on penduduk.id_penduduk=bantuan.id_penduduk AND penduduk.id_penduduk=?";
$query = "SELECT * FROM penduduk INNER JOIN bantuan on penduduk.id_penduduk=bantuan.id_penduduk INNER JOIN pbi ON bantuan.id_pbi=pbi.id_pbi JOIN bpnt ON bantuan.id_bpnt=bpnt.id_bpnt JOIN pkh ON bantuan.id_pkh=pkh.id_pkh AND penduduk.id_alamat=? ORDER BY nama_penduduk ASC";
	// $query = "SELECT * FROM alamat where id_provinsi=13 ORDER BY nama ASC";
	$dewan1 = $bansos->prepare($query);
	$dewan1->bind_param("i", $kelurahan);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
?>

<?php while ($row = $res1->fetch_array()) { 
		?>
<!-- echo "<tr>";
        echo "<th scope='row'>".$no++."</th>";
        echo "<td >".$row['nama_penduduk']."</td>";
        echo "<td >".$row['umur']."</td>";
        echo "<td >".$row['agama']."</td>";
        echo "</tr>"; -->
<tr>
    <th class="text-center"><?= $no++?> </th>
    <td class="text-center"><?= $row['nama_penduduk']?></td>
    <td class="text-center"><?= $row['status_bpnt']?></td>
    <td class="text-center"><?= $row['periode_bpnt']?></td>
    <td class="text-center"><?= $row['status_pbi']?></td>
    <td class="text-center"><?= $row['periode_pbi']?></td>
    <td class="text-center"><?= $row['status_pkh']?></td>
    <td class="text-center"><?= $row['periode_pkh']?></td>
</tr>
<?php } ?>