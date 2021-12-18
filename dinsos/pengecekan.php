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
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link btn btn-warning btn-custom " href="#">Login </a>
                    </li>

                </ul>
            </div>

    </div>
    </nav>
    
    <br/>
    <nav>
	    <div class="nav nav-pills justify-content-center" id="nav-tab">
		    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-id" role="tab">Identitas</a>
		    <a class="nav-item nav-link" id="nav-profil-tab" data-toggle="tab" href="#nav-kel" role="tab">Anggota Keluarga</a>
	    </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
	    <div class="tab-pane fade show active" id="nav-id" role="tabpanel"><br>
            <div class="container">
                <table class="table m-auto table-sm table-striped" style="width:70%">
		            <tbody>
		            	<tr>
			            	<td style="text-align:right" width="250px">NOMOR KK</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center">XXXXXXXXXXXXXXXXXXX</td>
			            </tr>
			            <tr>
				            <td style="text-align:right">NIK</td>
				            <td style="text-align:center">:</td>
				            <td style="text-align:center"></td>
			            </tr>
		            	<tr>
			            	<td style="text-align:right">NAMA</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
			            <tr>
			            	<td style="text-align:right">TANGGAL LAHIR</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
			            <tr>
			            	<td style="text-align:right">JENIS KELAMIN</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
                        <tr>
			            	<td style="text-align:right">STATUS</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
                        <tr>
			            	<td style="text-align:right">PENDIDIKAN</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
                        <tr>
			            	<td style="text-align:right">NAMA ORANG TUA</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
                        <tr>
			            	<td style="text-align:right">KEWARGANEGARAAN</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
                        <tr>
			            	<td style="text-align:right">STATUS DALAM KELUARGA</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
                        <tr>
			            	<td style="text-align:right">PEKERJAAN</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
                        <tr>
			            	<td style="text-align:right">AGAMA</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
                        <tr>
			            	<td style="text-align:right">ALAMAT</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"></td>
			            </tr>
                        <tr>
			            	<td style="text-align:right">BANTUAN YANG DIMILIKI</td>
			            	<td style="text-align:center">:</td>
			            	<td style="text-align:center"> <a href=""> Detail</a></td>
			            </tr>
		            </tbody>
	            </table>
            </div>
	    </div>
        <br>
	    <div class="tab-pane fade" id="nav-kel" role="tabpanel">
		    <div class="container">
                <table class="table m-auto table-sm table-striped" style="width:70%">
		            <tbody>
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>NAMA</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
		            	<tr>
			            	<td>XXXXXXXXXXXXXXXXXXX</td>
			            	<td>XXXXXXXXXXXXXXXXXXX</td>
			            	<td><a href=""> Cek Data</a></td>
			            </tr>
		            </tbody>
	            </table>
            </div>
	    </div>
    </div>

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