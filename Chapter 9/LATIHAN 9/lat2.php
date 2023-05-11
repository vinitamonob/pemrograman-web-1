<fieldset><legend>Isilah Data Anda</legend>
<form action="proses_get_lat2.php" method="get">
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
