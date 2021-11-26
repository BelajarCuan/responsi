<?php
  include 'koneksi.php';
  session_start();
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("Location:index.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hapus</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <link rel="stylesheet" href="" type="text/css">
</head>

<body>
  <!-- Page Content -->
  <div class="container" style="border: 2px solid black; margin-top:20px;">
    <?php
        $kode_barang =$_GET['kode_barang'];
        $query=mysqli_query($conn," SELECT * from inventaris where kode_barang = '$kode_barang'");
        $data=mysqli_fetch_array($query);
    ?>
    <br>
    <div class="container">
        <nav style="background: #16174F" class="navbar navbar-expand-lg navbar-dark ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class ="navbar-brand mb-0 h1 text-align-center">Hapus Data Invetaris</a>
                    </li>
                </ul>
        </nav><br>
    Yakin ingin menghapus
      <?php echo " " . $data['nama_barang'] . " ?<br>" ?>
        <div class="text-right">
            <a style="background: #16174F" class="btn btn-info"style="font-family: fantasy" href=hapusfix.php?kode_barang=<?php echo $data['kode_barang'];?> role="button">Hapus</a>
            <?php echo " " ?>
            <a style="background: #16174F" type="reset" class="btn btn-info" href="data.php" role="button">Batal</a>
        </div>
    <br><br>
  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>