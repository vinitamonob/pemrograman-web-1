<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
// $id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', alamat='$alamat' where nim='$nim'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>