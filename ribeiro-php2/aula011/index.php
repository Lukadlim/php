<?php
    $a = 'Esta frase é para testes.';

    echo $b = mb_substr($a, 5, 10);
    echo '<br>';
    echo mb_substr($a, 0, 3);
    echo '<br>';
    echo mb_substr($a, 10);
    echo '<br>';
    echo mb_substr($a, -8);
    echo '<br>';
    echo mb_substr($a, -12, -7);
    echo '<br>';

    $a = 'abcdefghijklmnop';
    echo substr($a, 6, -7);
    echo '<br>';

    $a = 'abc';
    var_dump(substr($a, 5));
    
?>