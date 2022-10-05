<?php
    $ficheiro = fopen('dados.txt', 'a');
    for($c = 0; $c < 10; $c++){
        fwrite($ficheiro, 'Esta linha contém o valor: ' . rand(0, 100) . PHP_EOL);
    }
    fclose($ficheiro);
?>