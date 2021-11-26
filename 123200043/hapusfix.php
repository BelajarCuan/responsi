<?php
include 'koneksi.php';
$kode_barang= $_GET['kode_barang'];

$query = mysqli_query($conn,"DELETE FROM inventaris WHERE kode_barang='$kode_barang'");
if($query)
{   
    echo '<script type="text/javascript">
    window.onload = function () { alert("Data berhasil dihapus!");
    } </script>';
    header("location:data.php");
}
else 
{
    echo '<script type="text/javascript">
    window.onload = function () { alert("Data tidak berhasil dihapus!");
    } </script>';
}
?>