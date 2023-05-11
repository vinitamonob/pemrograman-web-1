<?php
//membuat variabel $buah bertipe array, index/key tidak ditentukan
    $buah[] = "Anggur";
    $buah[] = "Rambutan";
    $buah[] = "Pepaya";
    $buah[] = "Pisang";

        echo "<p>";
        for($i=0;$i<count($buah);$i++) {
            echo "buah #$i: ".$buah[$i]."<br>";
        }
?>