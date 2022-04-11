<?php
/*
1. membuat koneksi ke server 
2. buat script sql untuk menciptakan tabel 
    tabel : mhs
    field : NIM Char, NAMA STRING, JURUSAN STRING, PASSCODE STRING
3. eksekusi script
4. cek status 
*/
    include_once("koneksidb.php");
    $sql ="CREATE TABLE mhs(
        NIM VARCHAR (8) PRIMARY KEY,
        NAMA VARCHAR (50),
        JURUSAN VARCHAR (20),
        PASSCODE VARCHAR (10)
    );";
    $hsl = mysqli_query($cnn,$sql);
    if($hsl){
        echo "Pembuatan tabel sukses";
    }else{
        echo "Pembuatan tabel gagal";
}