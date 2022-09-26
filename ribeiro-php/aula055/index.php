<?php
    function falar(array $msg){
        print_r($msg);
    }
    
    // falar('Batata');
    falar(['Teste', 'Batata']);

    echo '<br>';

    function conversar(string $msg){
        echo $msg;
    }

    conversar(2500);
    echo '<br>';

    // conversar([1, 2]);

    echo '<hr>';

    $falar = function($msg) { echo 'A minha mnesagem é ' . $msg; };

    function minha_funcao(callable $funcao, $dados){
        $funcao($dados);
    }

    minha_funcao($falar, 'esta é a minha mensagem.');

    echo '<hr>';

    function funcao(): array {
        return [
            1, 2,3
        ];
    }

    var_dump(funcao());
    echo '<br>';

    function funcao2(): string {
        // return [1, 2, 3];
    }

    // var_dump(funcao2());
?> 