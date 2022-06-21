<?php

if(isset($_POST["txSIMPAN"])){
    $pdata["KODE"] = $_POST["txKODE"];
    $pdata["NAMA"] = $_POST["txNAMA"];
    $pdata["TELEPON"] = $_POST["txTELEPON"];
    $pdata["EMAIL"] = $_POST["txEMAIL"];
    $pdata["PENERBANGAN"] = $_POST["txPENERBANGAN"];
    $pdata["TUJUAN"] = $_POST["txTUJUAN"];
    $pdata["TANGGAL"] = $_POST["txTANGGAL"];
    $pdata["TIKET"] = $_POST["txTIKET"];
    $pdata["MASKAPAI"] = $_POST["txMASKAPAI"];
    $pdata["TOTAL"] = $_POST["txTOTAL"];

    include_once("fungsi.php");
    masukindata($pdata);
    header("location:tampildata.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h1 class="fw-bold my-4">Insert Data Pesanan Tiket Pesawat</h2>
        <form action="" method="POST">
            KODE PESANAN
            <div>
                <input type="text" name="txKODE" class="form-control form-control-sm  w-25">
            </div>
            NAMA
            <div>
                <input type="text" name="txNAMA" class="form-control form-control-sm w-25">
            </div>
            TELEPON
            <div>
                <input type="text" name="txTELEPON" class="form-control form-control-sm w-25">
            </div>
            EMAIL
            <div>
                <input type="text" name="txEMAIL" class="form-control form-control-sm w-25">
            </div>
            PENERBANGAN
            <div>
                <select name="txPENERBANGAN" class="form-select form-select-sm w-25">
                    <option value="BALI">Bali</option>
                    <option value="JAKARTA">Jakarta</option>
                    <option value="LOMBOK">Lombok</option>
                    <option value="SURABAYA">Surabaya</option>
                    <option value="YOGYAKARTA">Yogyakarta</option>
                </select>
            </div>
            TUJUAN
            <div>
                <select name="txTUJUAN" class="form-select form-select-sm w-25">
                    <option value="BALI">Bali</option>
                    <option value="JAKARTA">Jakarta</option>
                    <option value="LOMBOK">Lombok</option>
                    <option value="SURABAYA">Surabaya</option>
                    <option value="YOGYAKARTA">Yogyakarta</option>
                </select>
            </div>
            TANGGAL PENERBANGAN
            <div>
                <input type="date" name="txTANGGAL" class="form-control form-control-sm w-25">
            </div>
            JUMLAH TIKET
            <div>
                <input type="text" name="txTIKET" class="form-control form-control-sm w-25">
            </div>
            MASKAPAI PENERBANGAN
            <div>
                <select name="txMASKAPAI" class="form-select form-select-sm w-25">
                    <option value="LION AIR">Lion Air</option>
                    <option value="GARUDA INDONESIA">Garuda Indonesia</option>
                    <option value="SRIWIJAYA AIR">Sriwijaya Air</option>
                    <option value="CITILINK">Citilink</option>
                </select>
            </div>
            TOTAL PEMBAYARN
            <div>
                <input type="text" name="txTOTAL" class="form-control form-control-sm w-25">
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="insert btn btn-success" name="txSIMPAN">INSERT</button>
            </div>
        </form>
    </div>
</body>
</html>