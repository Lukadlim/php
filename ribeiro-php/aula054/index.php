<?php
    $paises = require_once 'dados.php';
    echo 'Países';
    echo '<pre>';
    print_r($paises);
    echo '</pre>';

    echo '<hr>';

    echo '<p>Países</p>';

    foreach($paises as $pais){
        echo "$pais <br>";
    }