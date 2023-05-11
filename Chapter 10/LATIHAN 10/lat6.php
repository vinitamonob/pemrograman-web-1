<?php
    $motor['honda'][0] = "Beat";
    $motor['honda'][1] = "Supra X 125 ";
    $motor['honda'][2] = "Vario";
    $motor['yamaha'][0] = "Mio";
    $motor['yamaha'][1] = "Vixion";

    for($i=0;$i<count($motor['honda']);$i++) {
        echo $motor['honda'][$i];
        echo "<br>";
    }
?>