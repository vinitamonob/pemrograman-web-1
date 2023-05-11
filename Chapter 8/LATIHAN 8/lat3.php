<?php
    $server=$_SERVER['PHP_SELF'];
?>

<fieldset><legend>Pilih Kota Tujuan Anda</legend>
<form action="<?php echo $server;?>" method="post">
<table width="336" border="0">
    <tr>
        <td width="130">Kota Tujuan</td>
        <td width="8">:</td>
        <td width="176"><select name="tempat_tujuan" id="select">
            <option>Las Vegas</option>
            <option>Amsterdam</option>
            <option>Egypt</option>
            <option>Tokyo</option>
            <option>Caribbean Islands</option>
        </select>
        </td>
        </tr>

 <tr>
    <td>Biaya Transportasi</td>
    <td>:</td>
<td>
<?php
    $tujuan = $_POST['tempat_tujuan'];
    switch ($tujuan){ 
        case "Las Vegas": 
            echo " $500"; 
            break; 
        case "Amsterdam": 
            echo " $1500"; 
            break; 
        case "Egypt": 
            echo " $150"; 
            break; 
        case "Tokyo": 
            echo " $900"; 
            break; 
        case "Caribbean Islands": 
            echo " $700"; 
            break; } 
 ?>
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