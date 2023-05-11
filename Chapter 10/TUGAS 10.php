<?php
$olahraga= array('Sepak Bola','Tenis Meja','Bola Volly','Sepak Takrow','Golf','Renang');
echo "Terdapat beberapa jenis olahraga, antara lain : <br>";
echo "<br>";

$i = 0;
foreach ($olahraga as $i => $value) {
    echo "Olahraga " . $i++ . " : " . $value . '<br>';
}

echo "<br>";
echo "Diantara olahraga tersebut, olahraga yang paling saya sukai adalah " . $olahraga[1] . " dan " . $olahraga[5] . "<br>";