<?php
    $a = function()
    {
        echo 'Olá mundo <br>';
    };

    $a();

    echo '<hr>';

    $falar = function($msg)
    {
        echo "Eu digo: $msg";
    };

    $falar('Estou aqui');

    echo '<hr>';

    $andar = function($m)
    {
        return "Eu andei $m metros";
    };

    echo $andar(500);

    echo '<hr>';

    $b = function() 
    {
        return 'Função B';
    };

    function falar($x) {
        echo $x;
    }

    falar($b());
?>