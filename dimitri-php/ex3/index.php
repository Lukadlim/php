<?php
    /*
    $x = 10;
    $y = 5;

    echo $x + $y;
    */

    $x = 10;
    $y = 5;

    

    function teste(){ 
        global $x, $y, $z;
        $z = $x + $y;
        echo "x dentro da função é $x";
    }
    teste();

    echo "<p> x mais y é igual a $z </p>";

?>

