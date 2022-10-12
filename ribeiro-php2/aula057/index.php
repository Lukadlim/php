<?php
    $valores = [1, 2, 3, 4, 5,];
    $valores = [
        10 => 1,
        100 => 2,
        1000 => 3,
    ];
    $valores = ['João', 'Ana', 'Carlos'];
    $valores = [
        'administrador' => 'João',
        'contabilista' => 'Carlos',
        'financeiro' => 'Ana',
    ];

    echo array_key_first($valores);
    echo PHP_EOL;
    echo $valores[array_key_last($valores)];

?>