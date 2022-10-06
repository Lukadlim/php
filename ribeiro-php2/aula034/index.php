<?php
    $file = fopen('dados.csv', 'r');

    $max_lines = 1;
    while(!feof($file)){
        $l = fgetcsv($file);
        print_r($l);
        if($max_lines++ == 2){
            die('Terminando');
        }
    }

    fclose($file);
?>