<?php
    function saudacao($nome)
    {
        return "Olá, $nome";
    }

    function elevar_quadrado($n)
    {
        return $n * $n;
    }


    $nomes = [
        'João', 'Ana', 'Carlos'
    ];

    $final = array_map('saudacao', $nomes);
    print_r($final);

    $valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    $final = array_map('elevar_quadrado', $valores);
    print_r($final);
?>