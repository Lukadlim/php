<?php
    $voltas = isset($argv[1]) ? $argv[1] : 10;

    for ($c = 0; $c < $voltas + 1; $c++){
        echo $c . PHP_EOL;
    }
?>