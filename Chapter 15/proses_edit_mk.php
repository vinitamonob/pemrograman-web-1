<?php
    include "koneksi.php";
    $kode_mk=$_POST['kode_mk'];
    $nama_mk=$_POST['nama_mk'];
    $semester=$_POST['semester'];
    $sks=$_POST['sks'];
    $edit="UPDATE mata_kuliah SET kode_mk='$kode_mk', nama_mk='$nama_mk',semester='$semester', sks='$sks' 
           WHERE kode_mk='$kode_mk'";
    $hasil=mysqli_query($connect,$edit);

    //Notifikasi keberhasilan Edit Data
    if($hasil) {
        echo "Data berhasil diedit";
    }
    else  {
        echo "Data gagal diedit";
    }
?>

<meta http-equiv="refresh" content="1;url=lihat_data.php">