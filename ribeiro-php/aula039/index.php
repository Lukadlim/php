<?php
    class Objeto1
    {
        function teste()
        {
            echo 'Teste - normal';
        }
    }

    $a = new Objeto1;

    $b = new class
    {
        function teste()
        {
            echo 'Teste - classe anônima';
        }
    };

    $a->teste();
    echo '<br>';
    $b->teste();
?>