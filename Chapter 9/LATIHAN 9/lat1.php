<?php
    $server=$_SERVER['PHP_SELF'];
?>

<fieldset><legend>Isilah Data Anda</legend>
<form action="<?php echo $server;?>" method="post">
    <table width="585" border="0">
    <tr>
        <td width="199" valign="top">No.KTP</td>
        <td width="10" valign="top">:</td>
        <td width="354"><input type="text" name="no_ktp" id="textfield"></td>
    </tr>
    <tr>
        <td valign="top">Nama</td>
        <td valign="top">:</td>
        <td><input type="text" name="nama" id="textfield2"></td>
    </tr>
    <tr>
        <td valign="top">Alamat</td>
        <td valign="top">:</td>
        <td><textarea name="alamat" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
        <td valign="top">Jenis Kelamin</td>
        <td valign="top">:</td>
        <td><input type="radio" name="jk" id="radio" value="Laki-laki">
            Laki-laki<br>
            <input type="radio" name="jk" id="radio2" value="Perempuan"> 
            Perempuan</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Proses">
            <input type="reset" name="button2" id="button2" value="Reset"></td>
    </tr>
    </table>
</form>
</fieldset>
<?php
    $no_ktp=$_POST['no_ktp'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];

    echo "<br><fieldset><legend>Output</legend><table boreder='0' width='300'>
        <tr><td width='100'>No KTP</td><td>:</td><td width='200'>$no_ktp</td></tr>
        <tr><td>Nama</td><td>:</td><td>$nama</td></tr>
        <tr><td>Alamat</td><td>:</td><td>$alamat</td></tr>
        <tr><td>Jenis Kelamin</td><td>:</td><td>$jk</td></tr>";

    echo "</table></fieldset>";
?>
