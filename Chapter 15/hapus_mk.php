<?php
    include "koneksi.php";
    //Menerima data dengan Methode GET
    $kode_mk=$_GET['kode_mk'];
    $hapus="DELETE from mata_kuliah Where kode_mk='$kode_mk'";
    $hasil=mysqli_query($hapus);

    if($hasil) {
        echo "Data berhasil hapus";
    }
    else {
        echo "gagal hapus";
    }
?>

<meta http-equiv="refresh" content="1;url=lihat_data.php">