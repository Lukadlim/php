<?php
    $x = 1;

    while ($x < 10) {
        echo 'Ciclo em execução <br>';
        $x++;
    }

    echo '<hr>';

    $n1 = 0;

    while ($n1 <= 10) {
        echo $n1++ . '<br>';
    }

    echo '<hr>';

    $n2 = 0;

    while ($n2 < 10) echo $n2++ . '<br>'; 
?>