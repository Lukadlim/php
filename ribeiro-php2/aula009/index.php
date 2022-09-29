<?php
    echo $a = str_repeat('-', 20);
    echo '<br>';
    echo $b = str_repeat('=|', 20);
    echo '<br>';

    $valor = 100;
    echo str_pad($valor, 30, '.', STR_PAD_LEFT);
    echo '<br>';
    echo str_pad($valor, 30, '.', STR_PAD_BOTH);
    echo '<br>';
    echo str_pad($valor, 30, '.', STR_PAD_RIGHT);

    echo '<hr>';

    echo '<pre>';
    $valores = [100, 2100, 0, 45790];
    foreach($valores as $valor){
        echo str_pad($valor, 30, '.', STR_PAD_LEFT) . PHP_EOL;
    }
?>