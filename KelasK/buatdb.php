<?php
/*
Untuk membuat database adalah 
1. Koneksi ke server mysql
2. buat sql untuk menciptakan database 
    CREATE DATABASE namadb;
3. excute/jalankan intruksi pembuatan database
4. Cek status
*/

include_once("koneksidb.php");
$sql="CREATE DATABASE mahasiswa;";
$hsl = mysqli_query($cnn,$sql);
if ($hsl){
    echo "pembuatan database sukses";
}else{
    echo "Terjadi kesalahan dalam pembuatan database";
}

mysqli_close($cnn);