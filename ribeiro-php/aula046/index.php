<?php
    class Operacoes
    {
        static $n1;
        static $n2;

        static function adicionar()
        {
            return self::$n1 + self::$n2;
        }

        static function randHash(){
            return rand(0, 5000);
        }
    }

    Operacoes::$n1 = 10;
    Operacoes::$n2 = 20;
    echo Operacoes::adicionar();
    echo '<br>';

    echo Operacoes::randHash();
?>