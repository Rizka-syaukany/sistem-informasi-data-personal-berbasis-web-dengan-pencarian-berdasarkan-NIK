<?php 
include 'koneksi.php';
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
    <link rel="stylesheet" href="src/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Sistem Informasi Data Personal Berbasis Web</title>
</head>

<body class="bg-img bg-ijo">
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-nav">
            <a class="navbar-brand" href="index.php">
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
                        <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button"
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
    <div class="container  mt-4 ">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <form class="bg-lesu px-5 py-3">
                    <div class="form-group">
                        <select class="form-control mt-4" name="provinsi" id="provinsi">
                            <option value=""> </option>
                        </select>
                    </div>
                    <select class="form-control mt-4" name="kabupaten" id="kabupaten">
                        <option></option>
                    </select>
                    <select class="form-control mt-4" name="kecamatan" id="kecamatan">
                        <option></option>
                    </select>
                    <select class="form-control mt-4" name="kelurahan" id="kelurahan">
                        <option></option>
                    </select>
                    <form action="get_nama.php" method="POST">
                        <a class="btn btn-warning btn-custom mt-3 float-center" type="submit" data-toggle="modal"
                            data-target="#modalHasil">Submit </a>
                    </form>
                </form>
            </div>
        </div>
    </div>


    <!-- modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-lesu">
                <div class="modal-header txt-center">
                    <h5 class="modal-title ">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-warning btn-custom">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal Hasil -->
    <div class="modal" id="modalHasil" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hasil Pencarian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th rowspan="4" class="text-center">No</th>
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
                            <tbody id="row">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal hasil NIK -->
    <div class="modal" id="modalNIK" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hasil Pencarian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th rowspan="4" class="text-center">No</th>
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
                            if (isset($_POST['cari'])) {
                                $cari = trim($_POST['cari']);
                                $sql = "SELECT * FROM penduduk 
                                INNER JOIN bantuan on penduduk.id_penduduk=bantuan.id_penduduk 
                                INNER JOIN pbi ON bantuan.id_pbi=pbi.id_pbi 
                                JOIN bpnt ON bantuan.id_bpnt=bpnt.id_bpnt 
                                JOIN pkh ON bantuan.id_pkh=pkh.id_pkh and nik = '  $cari  ' 
                                ORDER BY nik ASC";
                            } else {
                                
                            }

                            ?>
                            <tbody id="row">
                                <?php 
                                // $hasil = mysqli_query($bansos, $sql);
                                $no = 0;
                                // while ($data = mysqli_fetch_array($hasil)) {
                                
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data["nik"]; ?></td>
                                    <td><?php echo $data["nama_penduduk"];   ?></td>
                                    <td><?php echo $data["jenis_kelamin"];   ?></td>
                                    <td><?php echo $data["umur"];   ?></td>
                                    <td><?php echo $data["status_pbi"]; ?></td>
                                    <td><?php echo $data["periode_pbi"]; ?></td>
                                    <td><?php echo $data["status_bpnt"]; ?></td>
                                    <td><?php echo $data["periode_pbi"]; ?></td>
                                    <td><?php echo $data["status_pkh"]; ?></td>
                                    <td><?php echo $data["periode_pbi"]; ?></td>
                                </tr>
                            </tbody>
                            <?php
                            // } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: 'POST',
            url: "get_provinsi.php",
            cache: false,
            success: function(msg) {
                $("#provinsi").html(msg);
            }
        });
        $("#provinsi").change(function() {
            var provinsi = $("#provinsi").val();
            $.ajax({
                type: 'POST',
                url: "get_kabupaten.php",
                data: {
                    provinsi: provinsi
                },
                cache: false,
                success: function(msg) {
                    $("#kabupaten").html(msg);
                }
            });
        });
        $("#kabupaten").change(function() {
            var kabupaten = $("#kabupaten").val();
            $.ajax({
                type: 'POST',
                url: "get_kecamatan.php",
                data: {
                    kabupaten: kabupaten
                },
                cache: false,
                success: function(msg) {
                    $("#kecamatan").html(msg);
                }
            });
        });
        $("#kecamatan").change(function() {
            var kecamatan = $("#kecamatan").val();
            $.ajax({
                type: 'POST',
                url: "get_kelurahan.php",
                data: {
                    kecamatan: kecamatan
                },
                cache: false,
                success: function(msg) {
                    $("#kelurahan").html(msg);
                }
            });
        });
        $("#kelurahan").change(function() {
            var kelurahan = $("#kelurahan").val();
            $.ajax({
                type: 'POST',
                url: "get_nama.php",
                data: {
                    kelurahan: kelurahan
                },
                cache: false,
                success: function(msg) {
                    $("#row").html(msg);
                }
            });
        });
    });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>