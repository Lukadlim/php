<?php
    class MinhaClasse
    {
        public $v1;
        protected $v2;
        private $v3;
    }

    $a = new MinhaClasse();
    $a->v1 = '111';
    // $a->v2 = '222';
    // $a->v3 = '333';

    echo $a->v1;
    echo '<br>';  
    
    // echo $a->v2;
    echo '<br>';

    // echo $a->v3;
    
    echo '<hr>';

    class ClasseTeste
    {
        public $publica = "a";
        protected $protegida = 'b';
        private $privada = 'c';
    }

    class ClasseDerivada extends ClasseTeste
    {
        function teste(){
            echo $this->publica;
            echo '<br>';
            echo $this->protegida;
            echo '<br>';
            echo $this->privada;
        }
    }

    $a = new ClasseTeste;
    $a->publica = '1';
    // $a->protegida = '2';
    // $a->privada = '3';

    $a = new  ClasseDerivada();
    $a->publica = '1';
    // $a->protegida = '2';
    $a->privada = '3';
    $a->teste();


    echo '<hr>';

    class Teste
    {
        private $valor = 'a';

        function mover(){
            echo $this->valor;
        }
    }

    $a = new Teste();
    $a->mover();
?>