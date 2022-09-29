<?php
    $a = 'Esta frase é usada para testes.';
    $b = 'para';

    if(str_contains($a, $b)){
        echo 'sim';
    } else {
        echo 'nao';
    }
    echo '<br>';

    $c = "USA";

    if(str_contains($a, $c)){
        echo 'sim';
    } else {
        echo 'nao';
    }
    echo '<br>';

    $c = 'ua';
    if(str_contains($a, $c)){
        echo 'sim';
    } else {
        echo 'nao';
    }
    echo '<br>';

    $a = 'Esta frase é usada para testes.';
    if(str_starts_with($a, 'E')){
        echo 'sim';
    } else {
        echo 'nao';
    }
    
    echo '<br>';

    if(str_ends_with($a, 'tes.')){
        echo 'sim';
    } else {
        echo 'nao';
    }
?>