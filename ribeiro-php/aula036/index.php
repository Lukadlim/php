<?php
    class Humano
    {
        public $nome = 'João';
        public $apelido = 'Ribeiro';

        public function nmCompleto() {
            return $this->nome . ' ' . $this->apelido;
        }
    }

    $homem = new Humano();

    echo $homem->nmCompleto();
?>