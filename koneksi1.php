<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASSCODE","");
    define("DBNAME","");
    define("DBPORT","3306");

    $con = mysqli_connect(DBHOST, DBUSER, DBPASSCODE) or die("Koneksi ke DBMS MySQL GAGAL<br>");
    echo "Koneksi ke DBMS Mysql Sukses<br>";