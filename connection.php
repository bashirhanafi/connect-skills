<?php
    // konfigurasi database
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "connectskill";

    // perintah php untuk akses ke db
    $connection = mysqli_connect($host, $user, $password, $database);
    if(!$connection) {
        die("Gagal terhubung dengan database : ".mysqli_connect_error());
    }
?>