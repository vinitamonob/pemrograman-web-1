<fieldset><legend>Menggunakan Methode POST</legend>
<form name="form1" method="post" action="proses_post.php">
    <table width="288" border="1">
    <tr>
        <td width="95">Nama</td>
        <td width="12">:</td>
        <td width="159"><input type="text" name="nama" 
id="textfield"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat" 
id="textfield2"></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><input type="text" name="pekerjaan" 
id="textfield3"></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td><select name="agama" id="select">
            <option>Islam</option>
            <option>Kristen Katolik</option>
            <option>Kristen Protestan</option>
            <option>Hindu</option>
            <option>Budha</option>
        </select>
        </td>
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