<?php
    $connect = mysqli_connect("localhost","root","");
    // mysqli_select_db("akademik");

    if(!$connect) {
        echo "Tdk Konek Ke Database, Silahkan Cek Apakah Konfigurasi sudah sesuai !";
    } else {
        echo "Koneksi Ke Database, Berhasil !";
    }
    if(!mysqli_select_db($connect,'akademik')) {
        echo "Database Tdk Ada, Silahkan cek kembali !"; 
    }
?>