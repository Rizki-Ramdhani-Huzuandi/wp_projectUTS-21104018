<?php

    if(isset($_GET["kode"])){
        include_once("koneksi2.php");
        $kode = $_GET["kode"];
        $sql = "SELECT * FROM pesanan_tiketpesawat WHERE kode_pesanan='".$kode."';";
        $hsl = mysqli_query($con, $sql);
        $h = mysqli_fetch_array($hsl);
    }

    if(isset($_POST["txSIMPAN"])){
        $pdata["KODE1"] = $_POST["txKODELAMA"];
        $pdata["KODE2"] = $_POST["txKODE"];
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
        updatedata($pdata);
        header("location:tampildata.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tabel</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
        <h1 class="fw-bold my-4">Edit Data Tabel Pesanan Tiket Pesawat</h1>
        <form action="edit.php" method="POST">
            <input type="hidden" name="txKODELAMA" value="<?=$h['kode_pesanan'];?>">
            KODE PESANAN
            <div>
                <input type="text" name="txKODE" class="form-control form-control-sm  w-25" name="txKODE" value="<?=$h['kode_pesanan'];?>">
            </div>
            NAMA
            <div>
                <input type="text" name="txNAMA" class="form-control form-control-sm w-25" name="txNAMA" value="<?=$h['nama'];?>">
            </div>
            TELEPON
            <div>
                <input type="text" name="txTELEPON" class="form-control form-control-sm w-25" name="txTELEPON" value="<?=$h['telepon'];?>">
            </div>
            EMAIL
            <div>
                <input type="text" name="txEMAIL" class="form-control form-control-sm w-25" name="txEMAIL" value="<?=$h['email'];?>">
            </div>
            PENERBANGAN DARI
            <div>
                <select name="txPENERBANGAN" class="form-select form-select-sm w-25" name="txPENERBANGAN" value="<?=$h['penerbangan'];?>">
                    <option value="BALI">Bali</option>
                    <option value="JAKARTA">Jakarta</option>
                    <option value="LOMBOK">Lombok</option>
                    <option value="SURABAYA">Surabaya</option>
                    <option value="YOGYAKARTA">Yogyakarta</option>
                </select>
            </div>
            TUJUAN 
            <div>
                <select name="txTUJUAN" class="form-select form-select-sm w-25" name="txTUJUAN" value="<?=$h['tujuan'];?>">
                    <option value="BALI">Bali</option>
                    <option value="JAKARTA">Jakarta</option>
                    <option value="LOMBOK">Lombok</option>
                    <option value="SURABAYA">Surabaya</option>
                    <option value="YOGYAKARTA">Yogyakarta</option>
                </select>
            </div>
            TANGGAL PENERBANGAN
            <div>
                <input type="date" name="txTANGGAL" class="form-control form-control-sm w-25" name="txTANGGAL" value="<?=$h['tanggal_penerbangan'];?>">
            </div>
            JUMLAH TIKET
            <div>
                <input type="text" name="txTIKET" class="form-control form-control-sm w-25" name="txTIKET" value="<?=$h['jumlah_tiket'];?>">
            </div>
            MASKAPAI PENERBANGAN
            <div>
                <select name="txMASKAPAI" class="form-select form-select-sm w-25" name="txMASKAPAI" value="<?=$h['maskapai'];?>">
                    <option value="LION AIR">Lion Air</option>
                    <option value="GARUDA INDONESIA">Garuda Indonesia</option>
                    <option value="SRIWIJAYA AIR">Sriwijaya Air</option>
                    <option value="CITILINK">Citilink</option>
                </select>
            </div>
            TOTAL PEMBAYARN
            <div>
                <input type="text" name="txTOTAL" class="form-control form-control-sm w-25" name="txTOTAL" value="<?=$h['total_pembayaran'];?>">
            </div>
            <br>
            <a href="tampildata.php" class="btn btn-danger me-1">Back</a>
            <button type="submit" class="save btn btn-success" name="txSIMPAN">Save</button>       
        </form>
    </div>
</body>
</html>