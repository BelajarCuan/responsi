<?php

    include "koneksi.php";
    $username  =$_POST['username'];
    $password =$_POST['password'];
    $nama_lengkap =$_POST['nama_lengkap'];
    $email =$_POST['email'];
    $no_tlp =$_POST['no_tlp'];

    $query=mysqli_query($conn, "INSERT INTO petugas VALUES ('$username','$password','$nama_lengkap','$email','$no_tlp')")
    or die(mysqli_error($conn));

    if($query)
    {   
        echo '<script type="text/javascript">
		window.onload = function () { alert("Petugas berhasil ditambahkan, silahkan Login!!");
		} </script>';
        header("location:index.php");
    }
    else 
    {
         echo '<script type="text/javascript">
		window.onload = function () { alert("Maaf, proses input gagal, silahkan coba kembali!");
		} </script>';;
    }
?>