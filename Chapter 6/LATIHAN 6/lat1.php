<?php
    echo "OPERATOR ARITMATIKA<BR>";
    echo "===========================<br>";
    $bil1 = 100;
    $bil2 = 50;
    echo "Nilai Bilangan 1 = " . $bil1. "<br>";
    echo "Nilai Bilangan 2 = " . $bil2. "<br>";
    echo "===========================<br><br>";

    $hasil_jumlah = $bil1 + $bil2;
    $hasil_kurang = $bil1 - $bil2;
    $hasil_kali = $bil1 * $bil2;
    $hasil_bagi = $bil1 / $bil2;
    $hasil_modulus = $bil1 % $bil2;

    echo "Hasil Penjumlahan dari<br>";
    echo "$bil1 + $bil2 adalah " .$hasil_jumlah. "<BR><BR>";
    echo "Hasil Pengurangan dari<br>";
    echo "$bil1 - $bil2 adalah " .$hasil_kurang. "<BR><BR>";
    echo "Hasil Perkalian dari<br>";
    echo "$bil1 * $bil2 adalah " .$hasil_kali. "<BR><BR>";
    echo "Hasil Pembagian dari<br>";
    echo "$bil1 / $bil2 adalah " .$hasil_bagi. "<BR><BR>";
    echo "Hasil Modulus dari<br>";
    echo "$bil1 % $bil2 adalah " .$hasil_modulus. "<BR><BR>";
?>