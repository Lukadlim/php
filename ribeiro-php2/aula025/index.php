<?php
    $valor = 425.7;

    // echo sprintf("O valor total da compra foi de %01.2f €", $valor);
    // echo '<br>';

    // echo sprintf("O valor total da compra foi de %08.2f €", $valor);
    // echo '<br>';

    // echo sprintf("%'_20.2f", $valor);

    $valores = [
        23.35,
        456.258,
        7.1,
        123,
    ];

    foreach($valores as $valor){
        echo sprintf("O preço é %'.30.2f €", $valor) . PHP_EOL;
    }

?>