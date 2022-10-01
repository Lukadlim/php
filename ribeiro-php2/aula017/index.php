<?php
    $a = 'Esta frase serve para testes';

    echo strrpos($a, 'se');
    echo '<br>';
    
    echo strrpos($a, 'Esta') . '->';
    echo var_dump(strrpos($a, 'Esta'));

    echo '<br>';

    echo (int)strrpos($a, 'Estas') . '->';
    echo var_dump(strrpos($a, 'Estas'));
?>