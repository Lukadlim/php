<?php
    // var_dump($argc);

    $vezes = 10;
    $min = 0;
    $max = 100;

    if($argc >= 2){
        $vezes = $argv[1];
    } if($argc == 4){
        $min = $argv[2];
        $max = $argv[3];
    }

    $file = fopen(time() . '.txt', 'w');
    for($c = 0; $c < $vezes; $c++){
        fwrite($file, rand($min, $max) . PHP_EOL);
    }
    fclose($file);

?>