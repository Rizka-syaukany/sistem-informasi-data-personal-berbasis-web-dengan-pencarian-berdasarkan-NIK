<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Cek Bansos</title>
</head>

<body class="bg-img bg-ijo">

    <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
            <a class="navbar-brand" href="#">
                <img src="src/img/logoputih.png" width="160" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Beranda</a>
                    </li>
                    <li class="nav-item dropdown no-arro">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cek Penerima Bantuan</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="index.php">Berdasarkan Alamat</a>
                            <a class="dropdown-item" href="p_nik.php">Berdasarkan NIK</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning btn-custom text-white" href="login.php">Login </a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>

    <br>

    <div class="container">

        <h4 class="text-center">Menampilkan data Berdasarkan NIK</h4>

        <div class="container  ">
            <div class="row justify-content-md-center">
                <div class="col-8  mt-4 bg-lesu px-5 py-3">
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                        <div class="form-group">
                            <label for="sel1">Kata Kunci:</label>
                            <?php
                $kata_kunci = "";
                if (isset($_POST['kata_kunci'])) {
                    $kata_kunci = $_POST['kata_kunci'];
                }
                ?>
                            <input type="text" name="kata_kunci" value="<?php echo $kata_kunci; ?>"
                                class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning btn-custom mt-3 float-center" value="Pilih">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <br>
            <thead class="thead-dark">
                <tr>
                    <th rowspan="4" class="text-center">No</th>
                    <th rowspan="4" class="text-center">NIK</th>
                    <th rowspan="4" class="text-center">Nama</th>

                </tr>
                <tr>
                    <th colspan="6" class="text-center">Banatuan</th>
                </tr>
                <tr>
                    <th colspan="2" class="text-center">BPNT</th>
                    <th colspan="2" class="text-center">PBI</th>
                    <th colspan="2" class="text-center">PKH</th>
                </tr>
                <tr>
                    <th class="text-center">status</th>
                    <th class="text-center">periode</th>
                    <th class="text-center">status</th>
                    <th class="text-center">periode</th>
                    <th class="text-center">status</th>
                    <th class="text-center">periode</th>
                </tr>
            </thead>
            <?php

            // $sql = "select * from penduduk where nik like '%" . $kata_kunci . "%'  order by nik asc";

            include "koneksi.php";
            if (isset($_POST['kata_kunci'])) {
                $kata_kunci = trim($_POST['kata_kunci']);
                $sql = "SELECT * FROM penduduk 
                INNER JOIN bantuan on penduduk.id_penduduk=bantuan.id_penduduk 
                INNER JOIN pbi ON bantuan.id_pbi=pbi.id_pbi 
                JOIN bpnt ON bantuan.id_bpnt=bpnt.id_bpnt 
                JOIN pkh ON bantuan.id_pkh=pkh.id_pkh and nik = '  $kata_kunci  ' 
                OR nama_penduduk like '%".$kata_kunci."%'
                ORDER BY nik ASC";
            } else {
                return;
            }

            // $sql = "SELECT * FROM penduduk 
            //     INNER JOIN bantuan ON penduduk.id_penduduk=bantuan.id_penduduk 
            //     INNER JOIN pbi ON bantuan.id_pbi=pbi.id_pbi 
            //     JOIN bpnt ON bantuan.id_bpnt=bpnt.id_bpnt 
            //     JOIN pkh ON bantuan.id_pkh=pkh.id_pkh order by nik asc";

            $hasil = mysqli_query($bansos, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;

            ?>
            <tbody>
                <tr>
                    <th class="text-center"><?= $no++?> </th>
                    <td class="text-center"><?= $data['nik']?></td>
                    <td class="text-center"><?= $data['nama_penduduk']?></td>
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
        </table>
    </div>

</body>

</html>