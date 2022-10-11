<?php
    $nomes = ['João', 'Ana', 'Carlos'];
    // $nomes[] = 'Antonio';

    print_r($nomes);

    echo str_pad('', 50, '-');
    echo PHP_EOL;

    // array_push($nomes, 'Joaquim', 'Rui', 'Marco', 'Sandra', 25);

    // array_unshift($nomes, 'Tiago', 'Teresa', 'Manuel');

    // $valor = array_shift($nomes);

    $valor = array_pop($nomes);

    print_r($nomes) . PHP_EOL;
    echo $valor;
?>