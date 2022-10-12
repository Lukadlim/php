<?php
    $empresa = [
        'administrador' => 'João',
        'secretaria' => 'Ana',
        'contabilista' => 'Carlos',
    ];

    if(key_exists('secretaria', $empresa)){
        echo 'Existe';
    } else {
        echo 'Não existe';
    }

    echo PHP_EOL;

    if(in_array('Matoi', $empresa)){
        echo 'Existe';
    } else {
        echo 'Não existe';
    }
?>