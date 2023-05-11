<?php
    $server=$_SERVER['PHP_SELF'];
?>

<fieldset><legend>Masukan Skor Nilai Anda</legend>
<form action="<?php echo $server;?>" method="post">
    <table width="301" border="0">
    <tr>
        <td width="91">Skor Angka</td>
        <td width="10">:</td>
        <td width="178"><input type="text" name="skor_nilai" id="textfield"></td>
    </tr>
    <tr>
        <td>Nilai Huruf</td>
        <td>:</td>
        <td><?php 
                $skor=$_POST['skor_nilai'];
                    if($skor>=80 && $skor<=100) {
                        echo "A";
                    }
                    elseif($skor>=60 && $skor<=79) {
                        echo "B";
                    }
                    elseif($skor>=40 && $skor<=59) {
                        echo "C";
                    }
                    elseif($skor>=20 && $skor<=39) {
                        echo "D";
                    }
                    else {
                        echo "E";
                    }
            ?></td> 
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