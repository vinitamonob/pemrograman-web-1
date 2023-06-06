<?php
    include "koneksi.php";
    $server=$_SERVER['PHP_SELF'];
?>

<fieldset><legend style="font-family:tahoma; font-size:14px"><b>Form Input Data Mata Kuliah</b></legend>
<form action="<?php echo $server;?>" method="post">
<br><table width="359" border="1" align="left" cellpadding="4px" style="margin:0 auto; border-collapse:collapse;fontfamily:tahoma; font-size:13px">
 <tr>
    <td width="135">Kode Mata Kuliah</td>
    <td width="10">:</td>
    <td width="174"><input type="text" name="kode_mk" id="textfield"></td></tr>
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
        <input type="reset" name="button2" id="button2" value="Batal"></td></tr>
 </table>
</form>
</fieldset>

<?php
    $kode_mk=$_POST['kode_mk'];
    $nama_mk=$_POST['nama_mk'];
    $semester=$_POST['nama_mk'];
    $sks=$_POST['sks'];
    $masukin="INSERT into mata_kuliah(kode_mk, nama_mk, semester, sks) 
              VALUES('$kode_mk','$nama_mk','$semester','$sks')";
    $hasil=mysqli_query($connect,$masukin);
?>