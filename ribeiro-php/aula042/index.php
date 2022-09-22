<?php
    class Veiculo
    {
        public $obj = "Veiculo";
        final function mover(){
            echo "{$this->obj} está se movendo";
        }
    }

    class Bicicleta extends Veiculo
    {
        public $obj = 'Bicicleta';
        function mover(){

        }
    }

    $car = new Veiculo;
    $car->mover();
    echo '<br>';


    $bike = new Bicicleta;
    $bike->mover();

    echo '<hr>';

    final class Humano
    {
        function teste(){
            echo 'teste';
        }
    }

    class Homem extends Humano
    {

    }

    $h = new Homem();
    $h->teste();
?>