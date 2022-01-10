<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/style.css">
</head>

<body class="bg-img bg-ijo">

    <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Cek Penerima Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning btn-custom " data-toggle="modal" data-target="#loginModal">Login </a>
                    </li>

                </ul>
            </div>

        </nav>
    </div>

    <br>

    <div class="container">


        <h4 class="text-center">Menampilkan data Berdasarkan NIK</h4>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="form-group">
                <label for="sel1">Kata Kunci:</label>
                <?php
                $kata_kunci = "";
                if (isset($_POST['kata_kunci'])) {
                    $kata_kunci = $_POST['kata_kunci'];
                }
                ?>
                <input type="text" name="kata_kunci" value="<?php echo $kata_kunci; ?>" class="form-control" required />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Pilih">
            </div>
        </form>

        <table class="table table-bordered table-hover">
            <br>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>


                </tr>
            </thead>
            <?php

            include "../koneksi.php";
            if (isset($_POST['kata_kunci'])) {
                $kata_kunci = trim($_POST['kata_kunci']);
                $sql = "select * from penduduk where nik like '%" . $kata_kunci . "%'  order by nik asc";
            } else {
                $sql = "select * from penduduk order by nik asc";
            }


            $hasil = mysqli_query($kon, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;

            ?>
                <tbody>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["nik"]; ?></td>
                        <td><?php echo $data["nama_penduduk"];   ?></td>
                        <td><?php echo $data["jenis_kelamin"];   ?></td>
                        <td><?php echo $data["umur"];   ?></td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>