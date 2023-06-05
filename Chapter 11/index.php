<?php
    //Memanggil koneksi
    include "koneksi.php";
   
    //Membuat Self Server
    $server=$_SERVER['PHP_SELF'];
?>
    
<fieldset><legend>Silahkan isi data Mata Kuliah</legend>
<form action="<?php echo $server;?>" method="post">
     <table width="376" border="0" align="left">
     <tr>
        <td width="143">Kode Mata Kuliah</td>
        <td width="8">:</td>
        <td width="203"><input type="text" name="kode_mk" id="textfield"></td>
     </tr>
     <tr>
        <td>Nama Mata Kuliah</td>
        <td>:</td>
        <td><input type="text" name="nama_mk" id="textfield2"></td>
     </tr>
     <tr>
        <td>Semester</td>
        <td>:</td>
        <td><input type="text" name="semester" id="textfield3"></td>
     </tr>
     <tr>
        <td>Bobot SKS</td>
        <td>:</td>
        <td><input type="text" name="sks" id="textfield4"></td>
     </tr>
     <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" id="button" value="Simpan">
            <input type="reset" name="button2" id="button2" value="Batal"></td>
     </tr>
     </table>
</form>
</fieldset>

<a href="lihat_data.php">Lihat Data</a>

<?php
    //Menerima data dengan Methode POST
    $kode_mk=$_POST['kode_mk'];
    $nama_mk=$_POST['nama_mk'];
    $semester=$_POST['semester'];
    $sks=$_POST['sks'];

    //Menginputkan data dalam database
    $query="INSERT into `matakuliah` (`kode_mk`, `nama_mk`, `semester`, `jumlah_sks`) 
            VALUES ('$kode_mk','$nama_mk','$semester','$sks')";
    $hasil=mysqli_query($connect, $query);
?>

