<?php
    $valor = 'João';
    // $valor = [1, 2, 3];

    if(is_array($valor)){
        echo 'É um array';
    } else {
        echo 'Não é um array';
    }
    echo PHP_EOL;

    echo str_pad('', 50, '-');
    echo PHP_EOL;

    $valor = null;
    $nome = '';
    $valores = [1, 2, 3];

    var_dump(empty($valor)) . PHP_EOL;
    var_dump(empty($nome)) . PHP_EOL;
    var_dump(empty($valores)) . PHP_EOL;

    echo str_pad('', 50, '-');
    echo PHP_EOL;

    var_dump(is_countable($valores)) . PHP_EOL;
    
    var_dump(is_iterable($valores));
?>