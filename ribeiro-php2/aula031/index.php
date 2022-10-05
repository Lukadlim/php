<?php
    $ficheiro = fopen('dados.txt', 'w');
    for($c = 0; $c < 10; $c++){
        fwrite($ficheiro, 'Esta linha contém o valor: ' . rand(0, 100) . PHP_EOL);
    }
    fclose($ficheiro);

    $ficheiro = fopen('dados.txt', 'r');

    // for($c = 0; $c < 10; $c++){
    //     echo fgets($ficheiro);
    // }
    // fclose($ficheiro);

    // while(feof($ficheiro) == false){
    //     echo fgets($ficheiro);
    // }
    // fclose($ficheiro);

    while(!feof($ficheiro)){
        echo fgets($ficheiro);
    }
    fclose($ficheiro);
?>
