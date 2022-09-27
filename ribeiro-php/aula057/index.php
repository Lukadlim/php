<?php
    $meu_boleano = true;
    echo (int)$meu_boleano;
    echo '<br>';

    $nomes = [
        'João',
        'Ana',
        'Carlos',
    ];

    $nomes1 = (object)$nomes;
    echo '<pre>';
    print_r($nomes1);
    echo '<br>';

    $nome = 'João';
    $os_nomes = (array)$nome;
    print_r($os_nomes);

?>