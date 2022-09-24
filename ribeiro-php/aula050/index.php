<?php
    abstract class Forma
    {
        public $largura = 100;
        public $altura = 200;

        abstract function area();

        function altura(){
            return $this->altura;
        }
    }

    class Retangulo extends Forma
    {
        public function area(){
            return $this->largura * $this->altura;
        }
    }

    $x = new Retangulo;
    echo $x->area();
    echo '<br>';
    echo $x->altura();
    
?>