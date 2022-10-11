<?php
    $nomes = ['João', 'Ana', 'Carlos',];

    list($nome1, $nome2, $nome3) = $nomes;
    echo $nome1 . PHP_EOL;
    echo $nome2 . PHP_EOL;
    echo $nome3 . PHP_EOL;

    echo str_pad('', 50, '-');
    echo PHP_EOL;

    list($nome1,,$nome2) = $nomes;
    echo $nome1 . PHP_EOL;
    echo $nome2 . PHP_EOL;

    echo str_pad('', 50, '-');
    echo PHP_EOL;

    $funcionarios = [
        'administrador' => 'João',
        'secretaria' => 'Ana',
        'contabilista' => 'Carlos',
    ];

    extract($funcionarios);
    echo $administrador . PHP_EOL;
    echo $secretaria . PHP_EOL;
    echo $contabilista . PHP_EOL;
?>