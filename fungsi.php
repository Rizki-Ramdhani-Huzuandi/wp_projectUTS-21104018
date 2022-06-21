<?php

function masukindata($pdata){

    $sqlINSERT = "INSERT INTO pesanan_tiketpesawat (kode_pesanan, nama, email, telepon, penerbangan, tujuan, tanggal_penerbangan, jumlah_tiket, maskapai, total_pembayaran) 
    VALUES('".$pdata["KODE"]."', '".$pdata["NAMA"]."', '".$pdata["EMAIL"]."', '".$pdata["TELEPON"]."', '".$pdata["PENERBANGAN"]."', '".$pdata["TUJUAN"]."', '".$pdata["TANGGAL"]."',
     '".$pdata["TIKET"]."','".$pdata["MASKAPAI"]."','".$pdata["TOTAL"]."');";

    include_once("koneksi2.php");
    $hsl = mysqli_query($con, $sqlINSERT);
    return $hsl;
}
function updatedata($pdata){
    $sql = "UPDATE pesanan_tiketpesawat SET
        kode_pesanan = '".$pdata["KODE2"]."',
        nama = '".$pdata["NAMA"]."',
        email = '".$pdata["EMAIL"]."',
        telepon = '".$pdata["TELEPON"]."',
        penerbangan = '".$pdata["PENERBANGAN"]."',
        tujuan = '".$pdata["TUJUAN"]."',
        tanggal_penerbangan = '".$pdata["TANGGAL"]."',
        jumlah_tiket = '".$pdata["TIKET"]."',
        maskapai = '".$pdata["MASKAPAI"]."',
        total_pembayaran = '".$pdata["TOTAL"]."'
        WHERE kode_pesanan = '".$pdata["KODE1"]."';";

    include_once("koneksi2.php");
    $hsl = mysqli_query($con, $sql);
    return $hsl;
}

function displaydata(){
    include_once("koneksi2.php");
    $sql = "SELECT * FROM pesanan_tiketpesawat;";
    $hsl = mysqli_query($con,$sql);
    $hsl1 = "";
    $no = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center">'.$no.'</td>
        <td class="text-center">'.$h["kode_pesanan"].'</td>
        <td class="text-center">'.$h["nama"].'</td>
        <td class="text-center">'.$h["email"].'</td>
        <td class="text-center">'.$h["telepon"].'</td>
        <td class="text-center">'.$h["penerbangan"].'</td>
        <td class="text-center">'.$h["tujuan"].'</td>
        <td class="text-center">'.$h["tanggal_penerbangan"].'</td>
        <td class="text-center">'.$h["jumlah_tiket"].'</td>
        <td class="text-center">'.$h["maskapai"].'</td>
        <td class="text-center">'.$h["total_pembayaran"].'</td>
        <td class = "text-center">
            <a class="btn btn-success px-3 fw-bold" href="edit.php?kode='.$h["kode_pesanan"].'">
            Edit
            </a>
        </td>
        <td class = "text-center">
            <a class="btn btn-danger px-3 fw-bold" href="delete.php?kode='.$h["kode_pesanan"].'" onClick=\'return confirm("Data ini akan dihapus, Lanjutkan?");\'>
            Hapus
            </a>
        </td>
    </tr>';
    $no++;
    }
    return $hsl1;
}