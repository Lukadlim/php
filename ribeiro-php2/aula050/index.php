<?php
    $nomes = ['João', 'Ana', 'Carlos'];

    echo count($nomes) . PHP_EOL;
    
    for($c = 0; $c < count($nomes); $c++){
        echo $nomes[$c] . PHP_EOL;
    }

    echo str_pad('', 50, '-');
    echo PHP_EOL;

    $empresa = [
        'administracao' => [
            'João',
            'Carlos',
        ],
        'armazem' => [
            'Antonio',
            'Marco',
            'Luiz',
            'Alexandre',
        ]
    ];

    echo count($empresa, COUNT_RECURSIVE);
?>