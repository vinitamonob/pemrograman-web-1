<?php
    $n = 19; //membuat variable
    $prima = true;

    for($i=2; $i<=($n/2); $i++) {
        if(($n%$i)==0) {
            $prima = false;
            break; //untuk menghentikan looping pada program
        }
    }
    if($prima) {
        echo "$n merupakan bilangan prima";
    } else {
        echo "$n bukan bilangan prima";
    }
?>