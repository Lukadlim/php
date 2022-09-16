<?php
    for ($x = 0; $x < 10; $x++) {
        echo $x . '<br>';
    }

    echo '<hr>';

    for ($x = 0; $x < 10; $x++)
        echo $x . '<br>';
    
    echo '<hr>';   
    
    $i = 1;
    for (; $i < 10;) {
        echo $i++ . '<br>';
    }

    echo '<hr>';

    for ($c = 1, $x = 10; $c < 10; $c++, $x--) {
        echo $x . '<br>';
    }

    echo '<hr>';

    for ($c = 10; $c >= 0; $c--) {
        echo $c . '<br>';
    }

    echo '<hr>';

    $nomes = ['João', 'Ana', 'Carlos'];

    for ($c = 0; $c < sizeof($nomes); $c++) {
        echo "$nomes[$c] <br>";
    }

    echo '<br>';

    for ($c = 0; $c < count($nomes); $c++) {
        echo "$nomes[$c] <br>";
    }
?>