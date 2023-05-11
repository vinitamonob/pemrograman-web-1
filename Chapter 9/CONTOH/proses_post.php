<?php
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $pekerjaan=$_POST['pekerjaan'];
    $agama=$_POST['agama'];
    //Menampilkan data
    echo "<table width='200' border='0'>
 
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>$nama</td>
    </tr> 
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>$alamat</td>
    </tr> 
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>$pekerjaan</td>
    </tr> 
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td>$agama</td>
    </tr>";
    
    echo "</table>";
?>