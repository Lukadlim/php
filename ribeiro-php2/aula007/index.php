<?php
    $a = 'joao ribeiro';
    $b = 'ANA CAROLINA';
    $c = 'Francisco Santos';

    echo strtoupper($a);
    echo '<br>';
    echo strtoupper($c);
    echo '<br>';

    
    $d = 'João Luís';

    echo strtoupper($d);
    echo '<br>';
    echo mb_strtoupper($d);
    echo '<br>';

    echo strtolower($b);
    echo '<br>';
    echo strtolower($c);
    echo '<br>';

    echo ucfirst('joão ribeiro');
    echo '<br>';
    echo lcfirst('João Ribeiro');
    echo '<br>';

    echo ucwords('joão ribeiro');

?>