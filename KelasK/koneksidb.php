<?php
    include_once("konfigurasi.php");
//server : local host (127.0.0.1)
//user: root
//password : ''
//
$cnn = mysqli_connect(dbSERVER,dbUSER,dbPWD,dbDATABASE,dbPORT)
    or die ("Terjadi Kesalahan saat koneksi ke database");
    echo "Koneksi ke database sukses";
