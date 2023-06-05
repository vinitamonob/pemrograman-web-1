<?php
    include "koneksi.php";
    $panggil="SELECT * FROM penduduk";
    $hasil=mysqli_query($connect,$panggil);
    echo"<h4>DATA PENDUDUK</H4>";
    echo "<table width='800' border='1'>
     <tr bgcolor='green'><th>No</th><th>No KTP</th>
     <th>Nama Lengkap</th><th>Jenis Kelamin</th><th>Agama</th>
     <th>Usia</th><th>Alamat</th>
     </tr>";

    $nomer_urut=0; 
    while($tampil=mysqli_fetch_array($hasil)){
        $no_ktp=$tampil['no_ktp'];
        $nama=$tampil['nama'];
        $jk=$tampil['jenis_kelamin'];
        $agama=$tampil['agama'];
        $usia=$tampil['usia'];
        $alamat=$tampil['alamat'];
       
        $nomer_urut++;
        echo "<tr><td>$nomer_urut</td><td>$no_ktp</td>
         <td>$nama</td><td>$jk</td><td>$agama</td>
         <td>$usia tahun</td><td>$alamat</td>
         </tr>";
    }
?>