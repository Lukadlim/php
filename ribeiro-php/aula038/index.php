<?php
    class Humano1
    {
        public $nome;
        public $apelido;
    }

    $homem = new Humano1;
    $homem->nome = 'João';
    $homem->apelido = 'Ribeiro';

    echo $homem->nome . ' ' . $homem->apelido;

    echo '<hr>';

    class Humano2
    {
        public function falar($msg)
        {
            echo "A pessoa está falando: $msg";
        }

        private function andar()
        {
            echo 'A pessoa esta andando...';
        }

        public function movimento()
        {
            $this->andar();
        }

    }

    $mulher = new Humano2;
    $mulher->falar('Olá');
    echo '<br>';
    $mulher->movimento();
    
    echo '<hr>';

    class Humano3
    {
        public $nome;
        public $apelido;

        function __construct($n, $a)
        {
            $this->nome = $n;
            $this->apelido = $a;
        }
    }

    class Humano4
    {
        function __construct(public $nome, public $apelido)
        {
          $this->nome = $nome;
          $this->apelido = $apelido;  
        }
    }

    $h3 = new Humano3('João', 'Ribeiro');
    $h4 = new Humano4('Ana', 'Martins');


    echo $h3->nome . ' ' . $h3->apelido;
    echo '<br>';
    echo $h4->nome . ' ' . $h4->apelido;


?>