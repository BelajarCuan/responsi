<?php
	include "koneksi.php";
	$kode_barang =$_POST['kode_barang'];
	$nama_barang =$_POST['nama_barang'];
	$jumlah =$_POST['jumlah'];
	$satuan =$_POST['satuan'];
	$tgl_datang =$_POST['tgl_datang'];
	$kategori =$_POST['kategori'];
	$status_barang =$_POST['status_barang'];
	$harga =$_POST['harga'];

	$query=mysqli_query($conn,"UPDATE inventaris SET nama_barang='$nama_barang', jumlah='$jumlah', satuan='$satuan', tgl_datang='$tgl_datang', kategori='$kategori', status_barang='$status_barang', harga='$harga' WHERE kode_barang='$kode_barang'");

	if($query){
		echo '<script type="text/javascript">
		window.onload = function () { alert("Data berhasil diubah!");
		} </script>';
		header("location:data.php");
	}
	else{
		echo '<script type="text/javascript">
		window.onload = function () { alert("Data tidak berhasil diubah!");
		} </script>';
	}
?>