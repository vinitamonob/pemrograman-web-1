<form action="proses_tugas.php" method="get">
    <table width="293" border="1">
    <tr>
        <td width="151">Kode Buku</td>
        <td width="13">:</td>
        <td width="107"><input type="text" name="kode" id="textfield"></td>
    </tr>
    <tr>
        <td>Judul Buku</td>
        <td>:</td>
        <td><input type="text" name="judul" id="textfield2"></td>
    </tr>
    <tr>
        <td>Penerbit</td>
        <td>:</td>
        <td><input type="text" name="penerbit" id="textfield3"></td>
    </tr>
    <tr>
        <td>Pengarang</td>
        <td>:</td>
        <td><input type="text" name="pengarang" id="textfield4"></td>
    </tr>
    <tr>
        <td>Tahun Terbit</td>
        <td>:</td>
        <td><select name="tahun" id="select">
             <option>2001</option>
             <option>2002</option>
             <option>2003</option>
             <option>2004</option>
             <option>2005</option>
            </select> 
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Proses">
            <input type="reset" name="button" id="button2" value="Reset"></td>
    </tr>
    </table>
</form>
