<?php
    $a = 'João';
    print_r($a);
    echo '<br>';

    $b = [1, 2, 3];
    print_r($b);
    echo '<br>';
    
    echo '<hr>';
    /////////////////////////////////////////////////////////////

    var_dump($a);
    echo '<br>';

    var_dump($b);

    
    echo '<hr>';
    /////////////////////////////////////////////////////////////

    var_export($a);
    echo '<br>';

    var_export($b);
    echo '<br>';

    $numeros = [];
    

    for($c = 0; $c < 10; $c++){
        $numeros[] = rand(0,100);
    }

    echo '<pre>';

    var_export($numeros);
    echo '</pre>';
    echo '<br>';

    $n = array (
        0 => 73,
        1 => 7,
        2 => 54,
        3 => 5,
        4 => 73,
        5 => 99,
        6 => 57,
        7 => 17,
        8 => 29,
        9 => 23,
    );
    

    var_dump($n);
?>