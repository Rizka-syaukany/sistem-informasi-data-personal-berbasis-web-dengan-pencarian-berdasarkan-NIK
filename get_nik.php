<?php 
include 'koneksi.php';

if (isset($_POST['cari'])) {
    $cari=trim($_POST['cari']);
    $sql="select * from penduduk where nik like '%".$cari."%' ";

}else {
   echo "gagal";
}
 $hasil=mysqli_query($bansos,$sql);
        $no=0;
        while ($data = mysqli_fetch_row($hasil)) {
            $no++;

            ?>
<tbody>
    <tr>
        <th><?php echo $no;?></th>
        <td><?php echo $data["nik"]; ?></td>
        <td class="text-center"><?= $data['status_bpnt']?></td>
        <td class="text-center"><?= $data['periode_bpnt']?></td>
        <td class="text-center"><?= $data['status_pbi']?></td>
        <td class="text-center"><?= $data['periode_pbi']?></td>
        <td class="text-center"><?= $data['status_pkh']?></td>
        <td class="text-center"><?= $data['periode_pkh']?></td>
    </tr>
</tbody>
<?php
        }
?>