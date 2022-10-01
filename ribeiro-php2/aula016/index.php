<?php
    $a = 'Esta frase serve para testes';
    
    echo strpos($a, 'se');
    echo '<br>';
    echo strpos($a, 'se', 10);
    echo '<br>';

    $a = 'Esta frase serve para testes 100';

    echo strpos($a, 100);
    echo '<br>';

    if(strpos($a, 'E') ===  false){
        echo 'Não existe';
    } else {
        echo 'Existe';
    }
    
?>