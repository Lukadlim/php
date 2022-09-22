<?php
    class Animal
    {
        function mover() {
            echo 'Mover a partir da classe base';
        }
    }

    class Mamifero extends Animal
    {

    }

    class Peixe extends Animal
    {
        function mover(){
            echo 'Mover a partir da classe peixe';
        }
    }

    $animal = new Animal;
    $animal->mover();
    echo '<br>';

    $mamifero = new Mamifero;
    $mamifero->mover();
    echo '<br>';

    $peixe = new Peixe;
    $peixe->mover();

    echo '<hr>';

    class Animal2
    {
        public $especie = 'Ave';
    }

    class Mamifero2 extends Animal2
    {
        public $especie = 'Cavalo';
    }

    $animal2 = new Animal2;
    echo $animal2->especie;
    echo '<br>';

    $mamifero2 = new Mamifero2;
    echo $mamifero2->especie;

    echo '<hr>';

    class Retangulo
    {
        public $larg, $alt;
        function __construct($l, $a)
        {
            $this->larg = $l;
            $this->alt = $a;
        }

        function calcularArea(){
            return $this->larg * $this->alt;
        }
    }

    $ret = new Retangulo(10, 20);
    echo $ret->calcularArea();
    echo '<br>';

    class Quadrado extends Retangulo
    {
        function __construct($l)
        {
            $this->larg = $l;
            $this->alt = $l;
        }
    }

    $q = new Quadrado(5);
    echo $q->calcularArea();
    echo '<br>';

    class Quadrado2 extends Retangulo
    {
        function __construct($l)
        {
            parent::__construct($l, $l);
        }
    }

    $q2 = new Quadrado2(2);
    echo $q2->calcularArea();
    echo '<br>';

    class Quadrado3 extends Retangulo
    {
        function __construct($l)
        {
            Retangulo::__construct($l, $l);
        }
    }

    $q3 = new Quadrado3(6);
    echo $q3->calcularArea();
?>