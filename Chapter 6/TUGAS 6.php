<?php
    $server = $_SERVER['PHP_SELF'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $hasil = $nilai1+$nilai2;
?>

<h3>FROM PENJUMLAHAN</h3>
<?php
    echo "<hr style='height: 2px; background: #000;'><br>";
?>
<form action="<?php echo $server;?>" method="post">
<table>
    <tr>
        <td>Nilai A</A></td>
        <td>:</td>
        <td>
            <input type="text" name="nilai1" value="0" />
        </td>
    </tr>
    <tr>
        <td>Nilai B</td>
        <td>:</td>
        <td>
            <input type="text" name="nilai2" value="0" />
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <input type="submit" name="button" id="button" value="Tambah">
            <input type="submit" name="button" id="button" value="Reset">
        </td>
    </tr>
    <tr>
        <td>hasil</td>
        <td>:</td>
        <td><?php echo $hasil; ?></td>
    </tr>
</table>
</form>