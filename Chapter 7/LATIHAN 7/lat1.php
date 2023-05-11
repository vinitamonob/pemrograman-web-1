<html> 
    <head> 
        <title>Perulangan Dengan For IT Programmer</title> 
    </head> 
    <body> 
    <center> 
    Membuat Tabel 5x4. 
    <table border=2> 
        <?php 
            for ($baris=1; $baris<=4; $baris++) { 
            // perulangan untuk baris 
        ?>
            <tr> 
            <?php 
                for ($kolom=1; $kolom<=5; $kolom++) { 
                // perulangan untuk kolom 
            ?>
            <td> 
                <?php 
                echo "baris $baris, kolom $kolom"; 
                ?> 
            </td> 
            <?php 
                } 
            ?>
 
        </tr> 
        <?php 
        } 
        ?>

    </table> 
    </center> 
    </body> 
 </html>