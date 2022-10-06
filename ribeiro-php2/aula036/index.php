<?php
    $dados = [
        ['João "PRO" Ribeiro', 'Programador', 47],
        ['Carlos', 'Advogado', 34],
        ['Marta', 'Professora', 29],
        ['Carla', 'Cabelereira', 41],
    ];

    $f = fopen('dados.csv', 'w');
    foreach($dados as $linha){
        fputcsv($f, $linha);
    }
    fclose($f);
?>