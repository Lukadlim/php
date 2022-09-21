<?php
    class Animais
    {
        public $especie;
        public $peso;

        function tipoEspecie()
        {
            return "Este animal é da espécie $this->especie";
        }

        function peso() 
        {
            return "Este animal pesa {$this->peso} kgs";
        }
    }

    $animais = new Animais;
    $animais->especie = 'Mamiferos';
    $animais->peso = 54;

    echo $animais->tipoEspecie();
    echo '<br>';
    echo $animais->peso();

    echo '<hr>';

    class Mamifero extends Animais
    {
        public $qnt_pernas;
        public $tem_pelo;

        function temQuantasPernas()
        {
            if ($this->peso == true) {
                $peso1 = "<br> Peso: {$this->peso} kgs";
            } else {
                $peso1 = '';
            }
            return "O animal da espécie {$this->especie} tem {$this->qnt_pernas} pernas $peso1";
        }
    }

    $mamifero = new Mamifero();
    $mamifero->especie = 'Cavalo';
    $mamifero->qnt_pernas = '4';
    $mamifero->peso = 5;
    echo $mamifero->temQuantasPernas(); 
    