<?php
    include "koneksi.php";
    $panggil="SELECT * FROM mahasiswa";
    $hasil=mysqli_query($connect,$panggil);

    echo"<h4><center>DATA MAHASISWA</center></H4>";
    echo "<table width='900' cellpadding='8px' border='1' align='center' 
     style='margin:0 auto; border-collapse:collapse; 
     font-family:tahoma; font-size:13px; border-color:#333399'>
     <tr bgcolor='green'><th rowspan='2'>No</th>
     <th rowspan='2'>NIM</th>
     <th rowspan='2'>Program Studi</th>
     <th rowspan='2'>Nama Lengkap</th>
     <th rowspan='2'>Tempat/Tanggal Lahir</th>
     <th rowspan='2'>Jenis Kelamin</th>
     <th rowspan='2'>Agama</th>
     <th rowspan='2'>Alamat</th>
     <th colspan='3'>Action</th></tr>
     <tr bgcolor='green'><td>Detail</td><td>Edit</td><td>Hapus</td></tr>";

    $nomer_urut=0; 
    while($tampil=$hasil->fetch_array()){
        $nim=$tampil['nim'];
        $prodi=$tampil['prodi'];
        $nama=$tampil['nama'];
        $tempat_lhr=$tampil['tempat_lahir'];
        $tanggal_lhr=$tampil['tanggal_lahir'];
        $jk=$tampil['jenis_kelamin'];
        $agama=$tampil['agama'];
        $alamat=$tampil['alamat'];
        //Menggabungkan tempat dan tanggal lahir
        $ttl=$tempat_lhr. ", " . $tanggal_lhr;
        $nomer_urut++;
        echo "<tr><td valign='top'>$nomer_urut</td><td 
        valign='top'>$nim</td>
        <td valign='top'>$prodi</td><td valign='top'>$nama</td>
        <td valign='top'>$ttl</td><td valign='top'>$jk</td>
        <td valign='top'>$agama</td><td valign='top'>$alamat</td>
        <td valign='top'><a href='lihat_detail_mhs.php?nim=$nim'>Lihat</a></td>
        <td valign='top'><a href='edit_mhs.php?nim=$nim'>Edit</a></td>
        <td valign='top'><a href='hapus_mhs.php?nim=$nim'>Hapus</a></td>
        </tr>";
    }
?>