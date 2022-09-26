<?php
    declare(strict_types=1);

    function falar(string $msg){
        echo $msg;
    }

    falar('Olá mundo');
    echo '<br>';
    // falar(2500)

    echo '<hr>';

    function somar(int $v1, int $v2){
        return $v1 + $v2;
    }

    echo somar(10, 20);
    // echo somar('a', 'b');
    echo '<hr>';

    function mensagem(?string $msg){
        echo $msg;
    }

    mensagem('Minha mensagem');
    mensagem(null);
    echo '<br>';

    function conversar(int|string $msg){
        echo $msg;
    }

    conversar('Olá mundo');
    echo '<br>';
    conversar(2500);
    echo '<br>';
    

    function calcular_quadrado_de(int|float $v1): int|float {
        // return 'Joao';
        return $v1 * $v1;
    }

    echo calcular_quadrado_de(5);
    echo '<br>';
    // echo calcular_quadrado_de('5');
    
?>