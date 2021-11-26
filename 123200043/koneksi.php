<?php
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbname = "responsi";

    $conn =new mysqli($serverName, $username,$password,$dbname );

    if ($conn-> connect_error)
    {
        die('Maaf koneksi gagal:'.$connect->connect_error);
    }
?>