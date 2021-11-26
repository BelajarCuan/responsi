<?php
	session_start();
	include "koneksi.php";

	$username = $_POST['username'];
    $password = $_POST['password'];

	$query = mysqli_query($conn, "SELECT * FROM petugas WHERE username='$username' && password='$password'") or die (mysqli_error($conn));

	$cek = mysqli_num_rows($query);

	if ($cek > 0) {
		$_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['nama_lengkap'] = $nama_lengkap;
		header("Location:menu.php");
	}
	else {
		header("Location:index.php?pesan=gagal");
	}
?>