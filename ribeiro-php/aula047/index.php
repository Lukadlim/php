<?php
    class Operacoes
    {
        static function randNum($min, $max){
            return rand($min, $max);
        }

        static function calForm($a, $b){
            return ($a * 2) + ($b * $a);
        }

        static function criarNome(){
            $nomes = ['João', 'Ana', 'Carlos', 'Francisco', 'Rui', 'Nunes'];
            $apelidos = ['Silva', 'Almeida', 'Santos', 'Rodrigues', 'Oliveira'];

            $nome = $nomes[rand(0, count($nomes) - 1)];
            $apelido = $apelidos[rand(0, count($apelidos) - 1)];
            
            return $nome . ' ' . $apelido;
        }
    }

    echo Operacoes::randNum(0, 1000);
    echo '<br>';
    echo Operacoes::calForm(10, 20);
    echo '<br>';
    echo Operacoes::criarNome();

?>