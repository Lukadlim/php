<?php
    $exemplo1 = "<h1>Olá mundo</h1>";

    $n1 = 345;
    $n2 = 100;

    #var_dump($n1)

    $teste = false;

    $lista = array("Banana", 5, "paçoca", 1);

    #print_r($lista);

    #var_dump($lista);
    
    $carro = "blue";

    /*if ($carro == "red"){
        echo "O carro é vermelho";
    }else{
       echo "O carro não é vermelho é $carro";
    }
    */
    
    class carro {
        public $cor;
        public $modelo;
        public function __construct($cor, $modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;
        }
        function mensagem(){
            echo "O carro é $this->cor e o modelo é $this->modelo";
        }
    }
    
    $carro1 = new carro("Amarelo", "Lamborghini");

    // echo $carro1->mensagem();

    $carro1 = NULL;

    var_dump($carro1);

?>