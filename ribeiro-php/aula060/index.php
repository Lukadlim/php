<?php
    $nome = 'Meu nome';
    $idade = 47;
    $acordado = true;

    if(is_array($nome)){
        echo 'É um array';
    } else {
        echo 'Não é um array';
    }
    echo '<br>';

    if(is_bool($acordado)){
        echo 'É um valor boleano';
    } else {
        echo 'Não é um valor boleano';
    }
    echo '<br>';

    if(is_int($idade)){
        echo 'É um número inteiro';
    } else {
        echo 'Não é um número intreiro';
    }

?>