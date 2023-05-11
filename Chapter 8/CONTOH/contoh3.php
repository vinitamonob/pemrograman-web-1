<?php 
    $tujuan = $_POST['tempat_tujuan']; 
    echo "Biaya Perjalanan Menuju $tujuan adalah "; 
    switch ($tujuan) { 
        case "Las Vegas": 
            echo " $500"; 
            break;
        case "Amsterdam": 
            echo " $1500"; 
            break; 
        case "Egypt": 
            echo " $1750"; 
            break; 
        case "Tokyo": 
            echo " $900"; 
            break; 
        case "Caribbean Islands": 
            echo " $700"; 
            break; 
    } 
?>  