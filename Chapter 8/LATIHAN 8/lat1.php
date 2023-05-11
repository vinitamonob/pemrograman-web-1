<?php
    $server=$_SERVER['PHP_SELF'];
?>

<fieldset><legend>Input Nilai</legend>
<form action="<?php echo $server;?> "method="post">
<table width="253" border="0">
<tr>
    <td width="69">Nilai</td>
    <td width="10">:</td>
    <td width="160"><input type="text" name="nilai" id="textfield"></td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Proses"></td>
</tr>
</table>

<?php
    $n=$_POST['nilai'];
        if($n>=70) {
            echo "Selamat Anda dinyatakan LULUS";
        }
        else {
            echo "Maaf, Anda tidak dinyatakan LULUS";
        }
?>
</form>
</fieldset>