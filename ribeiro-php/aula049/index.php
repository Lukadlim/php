<?php
    echo __LINE__;
    echo '<br>';

    echo __FILE__;
    echo '<br>';

    echo __DIR__;
    echo '<br>';

    function teste(){
        echo __FUNCTION__;
        echo '<br>';
    }

    teste();

    class MinhaClasse
    {
        public function identificar(){
            echo __CLASS__;
            echo '<br>';
            echo __METHOD__;
            echo '<br>';
        }
    }

    $a = new MinhaClasse();
    $a->identificar();
    echo '<br>';
?>