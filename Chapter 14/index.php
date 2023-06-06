<?php
    include "koneksi.php";
    $server=$_SERVER['PHP_SELF'];
?>

<fieldset>
<legend>Silahkan isikan data Anda dengan benar</legend>
<form enctype="multipart/form-data" action="<?php echo $server;?>" method="post">
 <br><table width="813" border="0" >
 <tr>
    <td width="206" valign="top">NIM</td>
    <td width="13" valign="top">:</td>
    <td width="572"><input type="text" name="nim" id="textfield"></td>
 </tr>
 <tr>
    <td valign="top">Prodi</td>
    <td valign="top">:</td>
    <td><select name="prodi" id="select">
        <option>Teknik Elektronika</option>
        <option>Teknik Informatika</option>
        <option>Teknik Mesin</option>
        </select>
    </td>
 </tr>
 <tr>
    <td valign="top">Nama Lengkap</td>
    <td valign="top">:</td>
    <td><input type="text" name="nama" id="textfield3"></td>
 </tr>
 <tr>
    <td valign="top">Tempat/Tanggal Lahir</td>
    <td valign="top">:</td>
    <td><input type="text" name="tempat" id="textfield2"> 
    / tgl. 
    <select name="tgl" id="select2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
    </select>
    bln. 
    <select name="bln" id="select3">
        <option>Januari</option><option>Februari</option>
        <option>Maret</option><option>April</option>
        <option>Mei</option><option>Juni</option>
        <option>Juli</option><option>Agustus</option>
        <option>September</option><option>Oktober</option>
        <option>November</option><option>Desember</option>
    </select>
    thn. 
    <select name="thn" id="select4">
        <option>2000</option><option>2001</option>
        <option>2002</option><option>2003</option>
        <option>2004</option><option>2005</option>
    </select>
    </td>
 </tr>
 <tr>
    <td valign="top">Jenis Kelamin</td>
    <td valign="top">:</td>
    <td><input type="radio" name="jk" id="radio" value="Laki-laki">Laki-laki<br>
        <input type="radio" name="jk" id="radio2" value="Perempuan">Perempuan</td>
 </tr>
 <tr>
    <td valign="top">Agama</td>
    <td valign="top">:</td>
    <td><select name="agama" id="select5">
        <option>Islam</option>
        <option>Kristen Katholik</option>
        <option>Kristen Protestan</option>
        <option>Hindu</option>
        <option>Budha</option>
        </select>
    </td>
 </tr>
 <tr>
    <td valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="textarea" cols="45" rows="5"></textarea>
    </td>
 </tr>
 <tr>
    <td valign="top">Foto</td>
    <td valign="top">:</td>
    <td><input type="file" name="foto" id="textfield4"></td>
 </tr>
 <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Simpan">
        <input type="reset" name="button2" id="button2" value="Batal">
    </td>
 </tr>
 </table>
</form>
</fieldset>

<?php
    $nim=$_POST['nim'];
    $prodi=$_POST['prodi'];
    $nama=$_POST['nama'];
    $tempat=$_POST['tempat'];
    $tgl=$_POST['tgl'];
    $bln=$_POST['bln'];
    $thn=$_POST['thn'];
    $tgl_lhr=$tgl . " ". $bln . " " . $thn;
    $jk=$_POST['jk'];
    $agama=$_POST['agama'];
    $alamat=$_POST['alamat'];
    //Membuat Variabel untuk menyimpan Foto atau Gambar
    $lokasi_foto=$_FILES['foto']['tmp_name'];
    $nama_foto=$_FILES['foto']['name'];
    $tipe_foto=$_FILES['foto']['type'];
    $folder="Gambar/$nama_foto";
    
    //Membuat Nofitikasi upload Foto atau Gambar
    if(!empty($lokasi_foto)) {
        move_uploaded_file($lokasi_foto,$folder);
    }

    $masuk="INSERT INTO mahasiswa(nim, prodi, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, foto) 
            VALUES('$nim','$prodi','$nama','$tempat','$tgl_lhr','$jk','$agama','$alamat','$nama_foto')";
    $hasil=mysqli_query($connect,$masuk);
?>
