<?php
    // $ficheiro = fopen('dados.txt', 'w');

    // for($c = 0; $c < 10; $c++){
    //     fwrite($ficheiro, 'Esta linha contém o valor de: ' . rand(0, 100) . PHP_EOL);
    // }
    // fclose($ficheiro);

    $origem = fopen('dados.txt', 'r');
    $destino = fopen('dados_finais.txt', 'w');

    while(!feof($origem)){
        fwrite($destino, fgets($origem));
    }

    fclose($origem);
    fclose($destino);
?>