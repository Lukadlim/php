<?php
    $a = 'Uma frase para testes.';

    echo strlen($a);
    echo '<br>';

    $b = null;
    $c = '';

    echo strlen($b);
    echo '<br>';
    echo strlen($c);
    echo '<br>';

    $sim = true;
    $nao = false;

    echo strlen($sim);
    echo '<br>';
    echo strlen($nao);
    echo '<br>';

    $numero = 1250;
    
    echo strlen($numero);
    echo '<br>';

    $nomes = ['Ana', 'Carlos', 'Miguel'];

    echo array_sum(array_map('strlen', $nomes));
    echo '<br>';

    $f = 'João Ribeiro';

    echo strlen($f);
    echo '<br>';
    echo mb_strlen($f);
    
?>