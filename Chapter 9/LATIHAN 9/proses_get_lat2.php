<?php
    $no_ktp=$_GET['no_ktp'];
    $nama=$_GET['nama'];
    $alamat=$_GET['alamat'];
    $jk=$_GET['jk'];

    echo "<br><fieldset><legend>Output</legend><table boreder='0' width='300'>
        <tr><td width='100'>No KTP</td><td>:</td><td width='200'>$no_ktp</td></tr>
        <tr><td>Nama</td><td>:</td><td>$nama</td></tr>
        <tr><td>Alamat</td><td>:</td><td>$alamat</td></tr>
        <tr><td>Jenis Kelamin</td><td>:</td><td>$jk</td></tr>";
        
    echo "</table></fieldset>";
?>