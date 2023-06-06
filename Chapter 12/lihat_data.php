<?php
    //Memanggil koneksi database
    include "koneksi.php";
    
    //Memanggil data dari database
    $panggil="SELECT * from matakuliah";
    $hasil=mysqli_query($connect,$panggil);
    echo"<h4>DATA MATA KULIAH</H4>";
    echo "<table width='600' border='1'>
     <tr bgcolor='green'><th>No</th><th>Kode Mata Kuliah</th>
     <th>Nama Mata Kuliah</th><th>Semester</th><th>Bobot SKS</th>
     </tr>";
    $nomer_urut=0; 
    
    while($tampil=mysqli_fetch_array($hasil)){
        $kode_mk=$tampil['kode_mk'];
        $nama_mk=$tampil['nama_mk'];
        $semester=$tampil['semester'];
        $sks=$tampil['jumlah_sks'];
        //Menambahkan nomor utut dengan perulangan
        $nomer_urut++;
        echo "<tr><td>$nomer_urut</td><td>$kode_mk</td><td>$nama_mk</td><td align='center'>$semester</td>
         <td align='center'>$sks</td>
         </tr>";
    }
?>