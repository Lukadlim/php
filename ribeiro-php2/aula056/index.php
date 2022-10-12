<?php
    function impares($valor)
    {
        return $valor % 2 != 0;
    }

    function pares($valor)
    {
        return $valor % 2 == 0;
    }

    function multiplos_cinco($valor)
    {
        return $valor % 5 == 0;
    }

    $valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 15, 25, 32, 45];
    $final = array_filter($valores, 'multiplos_cinco');

    print_r($final);
    
?>