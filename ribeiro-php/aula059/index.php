<?php
    $x = null;
    $nome = $x ?? 'Sem nome';
    // $nome = isset($x) ? $x : 'Sem nome';

    echo $nome;
    echo '<br>';

    $apelido = null;
    $apelido ??= 'Apelido desconhecido';
    echo $apelido;

?>