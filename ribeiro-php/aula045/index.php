<?php
    class Humano1
    {
        private $idade;
    }

    // $eu1->idade = 'Joao';

    class Humano2
    {
        private $idade = 0;

        public function setIdade($valor){
            if(is_numeric($valor)){
                $this->idade = $valor;
            }
        }

        public function getIdade(){
            return $this->idade;
        }
    }

    $eu2 = new Humano2;
    $eu2->setIdade('58');
    echo $eu2->getIdade();

    echo '<hr>';

    class Tempo
    {
        private $segundos;

        public function setSegundos($valor){
            if(is_numeric($valor) && $valor >= 0){
                $this->segundos = $valor;
                echo $this->segundos . ' segundo(s)';
            } else {
                echo $this->segundos = 0;
            }
        }

        public function getMinutos(){
            $this->segundos /= 60;
            echo $this->segundos . ' minuto(s)';
        }

        public function getSegundos($minutos){
            if(is_numeric($minutos) && $minutos >= 0){
                $this->segundos = $minutos * 60;
                echo $this->segundos . ' segundo(s)';
            } else {
                $this->segundos = 0;
                echo $this->segundos . ' segundo(s)';
            }
        }
    }

    $a = new Tempo;
    $a->setSegundos('360');
    echo '<br>';

    $a->getMinutos();
    echo '<br>';

    $a->getSegundos(6);

    echo '<hr>';
    
?>