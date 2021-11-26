<?php
  include 'koneksi.php';
  session_start();
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("Location:index.php?pesan=belum_login");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@456&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Outfit', sans-serif;
        }
    </style>
<title>Tambah Data Inventaris</title>
</head>
<body>
    <div class="container">
        <nav style="background: #122687" class="navbar navbar-expand-lg navbar-dark ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="navbar-brand mb-0 h1">Tambah Data Inventaris</a>
                    </li>
                </ul>
        </nav>
        <div class="border-left border-right" ><br>
            <div class="container">
                <form action="input.php" method="POST">
                    <div class="form-group row">
                        <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_datang" class="col-sm-2 col-form-label">Tanggal Datang</label>
                        <div class="col-3">
                            <input type="date" class="form-control" id="tgl_datang" name="tgl_datang" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-8">
                                <select class="my-1 mr-sm-2" id="kategori" name="kategori">
                                    <option value="Bangunan">Bangunan</option>
                                    <option value="Kendaraan">Kendaraan</option>
                                    <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
                                    <option value="Elektronik">Elektronik</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-group row ">
                        <label for="status_barang" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="status_barang"value="baik">
                                <label>Baik</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="status_barang"value="perawatan">
                                <label>Perawatan</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="status_barang"value="rusak">
                                <label>Rusak</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga Satuan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Satuan">
                        </div>
                    </div>
                    <a href="input.php"><button style="background: #122687 ; margin-left: 40px" type="submit" class="btn btn-info btn-md" name="submit">Simpan</button></a>
                    <a style="background: #122687" type="reset" class="btn btn-dark" href="data.php" role="button">Batal</a>
                </form>
            </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>