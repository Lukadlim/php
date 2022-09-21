<?php
    class Humano
    {
        private $nome;
        private $apelido;

        function __construct($n, $a)
        {
            $this->nome = $n;
            $this->apelido = $a;
        }

        public function nomeCompleto(){
            return $this->nome . ' ' . $this->apelido;
        }
    }

    $homem = new Humano('João', 'Ribeiro');
    $mulher = new Humano('Ana', 'Martins');

    echo $homem->nomeCompleto();
    echo '<br>';
    echo $mulher->nomeCompleto();

?>