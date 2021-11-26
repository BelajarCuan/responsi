<!DOCTYPE html>
<?php
    include "koneksi.php";
	session_start();
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("Location:login.php?pesan=belum_login");
    }
    $data = mysqli_query($conn, "SELECT * FROM petugas WHERE username='$username'");
    $hasil = mysqli_fetch_array($data);
?>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@456&display=swap" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
    <style>
        body{
            font-family: 'Outfit', sans-serif;
        }
        .bg-color {
            background-color: #122687;
        }
        .list-position {
            margin-top: 7%;
            background-color: #C2D4D8;
        }
        .container {
            width: 40%;
            margin-top: 12%;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.9);
            padding: 40px;
            margin-bottom: 10%;
        }
        .log-beranda {
            margin-top: 6.8%;
        }
        .nav-item:hover {
            background-color: gray;
        }
    </style>

</head>

<body>

<div class="bg-color p-1 text-center text-white fixed-top">
    <b>
        <h2 style="font-family:fantasy-serif; color:white">
        DAFTAR INVENTARIS BARANG <br>
        KANTOR SERBA ADA
        </h2>
    </b> 
</div>

<nav style="height : 40px" class="navbar navbar-expand-sm list-position">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item me-3">
                <a class="nav-link active text-dark" href="menu.php">Beranda</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link active text-dark" href="data.php">Daftar Inventaris</a>
            </li>
            <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    List per Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="bangunan.php">Bangunan</a>
                        <a class="dropdown-item" href="kendaraan.php">Kendaraan</a>
                        <a class="dropdown-item" href="alattulis.php">Alat Tulis Kantor</a>
                        <a class="dropdown-item" href="elektronik.php">Elektronik</a>
                    </div>
            </li>
           
        </ul>
        <li class="" style="list-style:none;">
            <button style=" background-color: navy;"> <a  style ="color: lavender"href="logout.php">Logout</a></button>
        </li>
    </div>
</nav>

<div class="log-beranda">
    <center>
        <h2 style="font-family: sans-serif; color:black">Selamat Datang</h2><br>
        <h1 style="color: navy"><?php echo $hasil['nama_lengkap']; ?></h1>
    </center>
</div>

<div class="bg-color p-3 text-center text-white fixed-bottom" style="widht:100%; heigth:5%">
    <center>
        Projek Responsi
    </center>
</div>

  <!-- Main Content -->
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>
</html>
