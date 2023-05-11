<?php
    $server=$_SERVER['PHP_SELF'];
?>

<fieldset><legend>Cek Inisial Warna</legend>
<form action="<?php echo $server;?> "method="post">
    <table width="253" border="0">
    <tr>
        <td width="69">Inisial</td>
        <td width="10">:</td>
        <td width="160">
        <select name="inisial" id="select">
            <option>K</option>
            <option>M</option>
            <option>B</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="Proses"></td>
    </tr>
    </table>
</form>
</fieldset>

<?php
    $i=$_POST['inisial'];
    if($i=='K'){
            echo $i. " = adalah Inisial dari warna Kuning";
        }
        elseif($i=='M'){
            echo $i. " = adalah Inisial dari warna Merah";
        } 
        else{
            echo $i. " = adalah Inisial dari warna Biru";
        }
?>