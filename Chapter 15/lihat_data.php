<?php
    include "koneksi.php";
    $panggil="SELECT * FROM mata_kuliah";
    $hasil=mysqli_query($connect,$panggil);
    echo "<h4><center>DATA MATA KULIAH</center></H4>";
    echo "<table width='900' cellpadding='8px' border='1' align='center' 
    style='margin:0 auto; border-collapse:collapse; font-family:tahoma;font-size:13px; border-color:#333399'>
    <tr bgcolor='green'>
    <th rowspan='2'>No</th>
    <th rowspan='2'>Kode Mata Kuliah</th>
    <th rowspan='2'>Nama Mata Kuliah</th>
    <th rowspan='2'>Semester</th>
    <th rowspan='2'>Bobot SKS</th>
    <th colspan='2'>Action</th></tr>
    <tr bgcolor='green'><td>Edit</td>
    <td>Hapus</td>
    </tr>";
    
    $nomer_urut=0; 
    while($tampil=$hasil->fetch_array()){
        $kode_mk=$tampil['kode_mk'];
        $nama_mk=$tampil['nama_mk'];
        $semester=$tampil['semester'];
        $sks=$tampil['sks'];
        $nomer_urut++;
            echo "<tr><td valign='top'>$nomer_urut</td>
            <td valign='top'>$kode_mk</td>
            <td valign='top'>$nama_mk</td>
            <td valign='top' align='center'>$semester</td>
            <td valign='top' align='center'>$sks</td>
            <td valign='top'>
            <a href='edit_mk.php?kode_mk=$kode_mk'>Edit</a></td>
            <td valign='top'>
            <a href='hapus_mk.php?kode_mk=$kode_mk'>Hapus</a></td></tr>";
    }
?>