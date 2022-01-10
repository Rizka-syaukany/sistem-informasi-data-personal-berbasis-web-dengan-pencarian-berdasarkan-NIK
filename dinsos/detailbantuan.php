<?php  
session_start();
if (!isset($_SESSION["role"])) {
	echo "Anda harus login dulu <br><a href='../login.php'>Klik disini</a>";
	exit;
}
$email=$_SESSION["email"];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/style.css">
    <title>Pengecekan</title>
</head>

<body>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
            <a class="navbar-brand" href="#">
                <img src="../src/img/logoputih.png" width="160" height="50" alt="">
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
                            <a class="dropdown-item" href="p_tempat.php">Berdasarkan Alamat</a>
                            <a class="dropdown-item" href="../nik/nik.php">Berdasarkan NIK</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link btn btn-warning btn-custom " data-toggle="modal"
                            data-target="#loginModal">Login </a>
                    </li> -->
                </ul>
                <ul class="navbar-nav ml-auto ml-md-0">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle fa-fw"></i> <?php echo $email ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                            <a class="dropdown-item" href="../logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    </nav>

    <br />

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-id" role="tabpanel"><br>
            <div class="container">
                <table class="table m-auto table-sm table-striped" style="width:70%">
                    <tbody>
                        <tr>
                            <td style="text-align:right" width="250px">NIK</td>
                            <td style="text-align:center">:</td>
                            <td style="text-align:center">XXXXXXXXXXXXXXXXXXX</td>
                        </tr>
                        <tr>
                            <td style="text-align:right">Nama</td>
                            <td style="text-align:center">:</td>
                            <td style="text-align:center"></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="table m-auto table-sm table-bordered" style="width:70%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Bantuan</th>
                            <th scope="col">Status Bantuan</th>
                            <th scope="col">Periode Bantuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Penerima Bantuan Iuran</td>
                            <td>YA</td>
                            <td>DESEMBER 2021</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Program Keluarga Harapan</td>
                            <td>TIDAK</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Bantuan Pangan Non Tunai</td>
                            <td>TIDAK</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>