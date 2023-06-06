<?php
    include "koneksi.php";
    //Menerima data dengan Methode GET
    $nim=$_GET['nim'];
    $hapus="DELETE from mahasiswa Where nim='$nim'";
    $hasil=mysqli_query($connect,$hapus);

    if($hasil){
        echo "Data berhasil hapus";
    }
    else {
        echo "gagal hapus";
    }
?>

<meta http-equiv="refresh" content="1;url=lihat_data.php">

<?php
    include "koneksi.php";
    $nim=$_GET['nim'];
    $panggil="SELECT * FROM mahasiswa WHERE nim='$nim'";
    $hasil=$mysqli->query($panggil);
    $tampil=$hasil->fetch_array();
    $nim=$tampil['nim'];
    $prodi=$tampil['prodi'];
    $nama=$tampil['nama'];
    $tempat_lhr=$tampil['tempat_lahir'];
    $tanggal_lhr=$tampil['tanggal_lahir'];
    $jk=$tampil['jenis_kelamin'];
    $agama=$tampil['agama'];
    $alamat=$tampil['alamat'];
    $foto=$tampil['foto'];
    $ttl=$tempat_lhr. ", " . $tanggal_lhr;
    
    echo "<h3><center>DETAIL BIODATA MAHASISWA</center></h3><hr>";
    echo "<table border='0' width='500' align='center'><tr><td rowspan='7' valign='top'>
        <img src='Gambar/$foto' width='111' height='127' align='left' ></td>
        <td>Nim</td><td>:</td><td>$nim</td></tr><tr>
        <td>Program Studi</td><td>:</td><td>$prodi</td></tr>
        <tr><td>Nama Lengkap</td><td>:</td><td>$nama</td></tr>
        <tr><td>Tempat/Tanggal Lahir</td><td>:</td><td>$ttl</td></tr>
        <tr><td>Jenis Kelamin</td><td>:</td><td>$jk</td></tr>
        <tr><td>Agama</td><td>:</td><td>$agama</td></tr><tr><td>Alamat</td><td>:</td><td>$alamat</td></tr>";
?>

<br><br><center><a href="lihat_data.php">Lihat data lainnya</a></center>