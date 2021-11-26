<?php
  include 'koneksi.php';
  session_start();
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("Location:index.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html>
  <head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@200&display=swap" rel="stylesheet">
  <style>
  body{
        font-family: 'Outfit', sans-serif;
        font-size: 0.8rem;
        width:110%;
      }
      table{
        width: 97%;
        border: 2px solid black;
        text-align: center;
        padding:5px;
      }
      th{
        text-align: center;
        background: #122687;
        color: white;
        padding:5px;
        font-size: 15px;
      }
      td{
        text-align: center;
      }
      .bg-logout{
        background:#122687;color:white;
      }
   </style>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

    <title>Daftar Inventaris</title>
  </head>

  <body>
  
<nav style="background-color: #C2D4D8; padding-top: 3px;" class="navbar navbar-expand-sm list-position">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-1 mb-lg-0">
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
    </div>
</nav><br>

  <div>
    <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tambahinves.php">
        <button style="background-color:#122687; margin-left:20px; margin-bottom:20px;" type="button" class="bg-logout text-white" align="right" >
        +Tambah</button></a></li>
    </ul>
  </div>

  <table border="1" class="text-center" align="center" cellpadding="3" cellspacing="5">
   <tr>
   <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Satuan</th>
        <th>Tanggal<br>Datang</th>
        <th>Kategori</th>
        <th>Status</th>
        <th>Harga Satuan</th>
        <th>Total Harga</th>
        <th>Aksi</th>
   </tr>


   <?php
         $count = 1;
        $total_harga = 0;
        function convert($value)
            {
                $hasil = "Rp. " . number_format($value, 2, ',', '.');
                return $hasil;
            }
            $query = mysqli_query($conn, "SELECT * from inventaris WHERE kategori='Alat Tulis Kantor'");
            while($data=mysqli_fetch_array($query))
       { ?>

<tr>
              <td><?php echo $count; ?></td>
              <td><?php echo $data['kode_barang']; ?></td>
              <td><?php echo $data['nama_barang']; ?></td>
              <td><?php echo $data['jumlah']; ?></td>
              <td><?php echo $data['satuan']; ?></td>
              <td><?php echo $data['tgl_datang']; ?></td>
              <td><?php echo $data['kategori']; ?></td>
              <td><?php echo $data['status_barang']; ?></td>
              <td><?php echo convert($data['harga']); ?></td>
              <td><?php echo convert($data['harga'] * $data['jumlah']); ?></td>
              <td>
                  <a href=edit.php?kode_barang=<?php echo $data['kode_barang'];?>><button class="btn btn-primary">Edit</button></a>
                  <a href=hapus.php?kode_barang=<?php echo $data['kode_barang'];?>><button class="btn btn-primary">Hapus</button></a>
              </td>


            <?php 
                $count = $count + 1;
                $total_harga = $total_harga + ($data['harga'] * $data['jumlah']);
                }
            ?>
            </tr>

    </table>
    <h1 style="clear:both;margin-left:600px;margin-top:8px;font-size:1.2rem;"><?php echo "Total Inventaris Alat Tulis Kantor = " . convert($total_harga); ?></h1>
</tr>
   </center>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  </body>
</html>
   