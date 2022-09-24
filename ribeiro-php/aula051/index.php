<?php
    trait MinhasHabilidades
    {
        public function falar($msg){
            echo "Eu digo: $msg";
        }

        public function saltar($m){
            echo "Eu salto $m metro(s)";
        }
    }

    class Humano
    {
        use MinhasHabilidades;
    }

    $h = new Humano;
    $h->falar('Olá mundo');
    echo '<br>';

    $h->saltar(3);
?>