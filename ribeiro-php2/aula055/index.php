<?php
    $questao = 'Qual é a capital de Portugal';
    $respostas = [
        'Lisboa',
        'Coimbra',
        'Porto'
    ];

    shuffle($respostas);
    echo $questao . PHP_EOL;
    foreach($respostas as $resposta)
        echo "> $resposta" . PHP_EOL;
?>