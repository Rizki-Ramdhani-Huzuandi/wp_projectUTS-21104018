<?php

include_once("koneksi2.php");

$sql = "CREATE TABLE pesanan_tiketpesawat(
    kode_pesanan varchar(6) PRIMARY KEY, 
    nama varchar(30),
    telepon varchar(13),
    email varchar(30),
    penerbangan varchar(30),
    tujuan varchar (30),
    tanggal_penerbangan date,
    jumlah_tiket varchar(5),
    maskapai varchar(30),
    total_pembayaran varchar(15)
);";

$hsl = mysqli_query($con, $sql);
    if($hsl){
        echo "Tabel pesanan_tiketpesawat <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Tabel pesanan_tiketpesawat <strong>GAGAL</strong> Dibuat<br>";
    }

mysqli_close($con);