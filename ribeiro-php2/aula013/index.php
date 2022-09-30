<?php
    $a = 'Este texto serve para testar o sistema.';

    echo str_replace('te', 'TE', $a);
    echo '<br>';
    echo str_replace(' ', '->', $a);
    echo '<br>';
    echo str_replace(' ', '<-', $a, $qnt) . $qnt ;

    echo '<hr>';

    $vogais = ['a', 'i', 'u', 'e', 'o'];

    echo str_ireplace($vogais, 'x', $a);

    echo '<hr>';

    $a = 'Este jantar está muito bom';
    $original = ['jantar', 'bom'];
    $novos = ['almoço', 'ruim'];

    echo str_replace($original, $novos, $a);
?>