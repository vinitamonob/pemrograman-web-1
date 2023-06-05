<?php
    include "koneksi.php";
    $server=$_SERVER['PHP_SELF'];
?>

<fieldset><legend>Silahkan Input Data Anda</legend>
<form action="<?php echo $server;?>" method="post">
 <table width="592" border="0">
 <tr>
    <td width="129" valign="top">No KTP</td>
    <td width="10" valign="top">:</td>
    <td width="431"><input type="text" name="no_ktp" id="textfield"></td>
 </tr>
 <tr>
    <td valign="top">Nama Lengkap</td>
    <td valign="top">:</td>
    <td><input type="text" name="nama" id="textfield2"></td>
 </tr>
 <tr>
    <td valign="top">Jenis Kelamin</td>
    <td valign="top">:</td>
    <td><input type="radio" name="jk" id="radio" value="Laki-laki"> Laki-laki<br>
        <input type="radio" name="jk" id="radio2" value="Perempuan"> Perempuan</td>
 </tr>
 <tr>
    <td valign="top">Agama</td>
    <td valign="top">:</td>
    <td><select name="agama" id="select">
        <option>Islam</option>
        <option>Kristen Protestan</option>
        <option>Kristen Katholik</option>
        <option>Hindu</option>
        <option>Budha</option>
        </select>
    </td>
 </tr>
 <tr>
    <td valign="top">Usia</td>
    <td valign="top">:</td>
    <td><input type="text" name="usia" id="textfield3"> Tahun</td>
 </tr>
<tr>
    <td valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="textarea" cols="45" rows="5"></textarea></td>
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
    $no_ktp=$_POST['no_ktp'];
    $nama=$_POST['nama'];
    $jk=$_POST['jk'];
    $agama=$_POST['agama'];
    $usia=$_POST['usia'];
    $alamat=$_POST['alamat'];
    $masuk="INSERT into penduduk (no_ktp, nama, jenis_kelamin, agama, usia, alamat) 
            VALUES ('$no_ktp','$nama','$jk','$agama','$usia','$alamat')";
    $hasil=mysqli_query($connect,$masuk);
?>