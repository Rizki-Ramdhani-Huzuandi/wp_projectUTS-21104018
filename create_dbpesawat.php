<?php
include_once("koneksi1.php");

if($con){
    $sql = "CREATE DATABASE dbpesawat;";

    $hsl = mysqli_query($con, $sql);
    if($hsl){
        echo "Database <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Database <strong>GAGAL</strong> Dibuat<br>";
    }
    mysqli_close($con);
}