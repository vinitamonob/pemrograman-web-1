<?php 
    $nim = "0411500400"; 
    $nama = 'Chotimatul Musyarofah'; 
    $umur = 23; 
    $nilai = 82.25; 
    $status = TRUE; 
    
    echo "NIM : " . $nim . "<br>"; 
    echo "Nama : $nama<br>"; 
    echo "Umur : " . $umur; print "<br>"; 
    echo "Nilai : $nilai<br>"; 
?>

<br>
<table border=1>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?=$nim ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?=$nama ?></td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><?=$umur ?></td>
    </tr>
    <tr>
        <td>Nilai</td>
        <td>:</td>
        <td><?=$nilai ?></td>
    </tr>
</table>