<?php
    $frase = 'Esta frase tem 29 caracteres.';
    $n = '<br>';

    // echo $frase[0] . $n;
    // echo $frase[5] . $n;


    ////////////////////////////////////////////////////////

    $a = 'João';
    $b = "Carlos";

    $c = ($a == $b);
    $d = ($a != $b);

    // var_dump($c, $d);

    ////////////////////////////////////////////////////////

    $frase = 'Esta frase tem 29 caracteres.';

    // echo strlen($frase);
    // echo $n;
    
    // echo substr($frase, 0, 4);
    // echo $n;
    
    // echo strtoupper($frase);
    // echo $n;
    
    // echo strtolower($frase);
    // echo $n;
    
    // echo str_replace('a', 'x', $frase);
    // echo $n;

    // echo strpos($frase, 'a');
    
    ////////////////////////////////////////////////////////

    $nome = "Ana Maria Silva Cardoso";

    $x = str_contains($nome, 'rd');
    $x = str_starts_with($nome, 'Ana Ma');
    $x = str_ends_with($nome, 'oso');

    var_dump($x);

?>