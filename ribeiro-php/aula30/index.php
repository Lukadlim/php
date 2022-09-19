<?php
    function falar() 
    {
        return;
        echo 'Não aparecerá esse texto';
    }

    falar();

    function adicionar($a, $b)
    {
        $resultado = $a + $b;
        return $resultado;
    }

    echo adicionar(10, 20);

    echo '<hr>';

    function add(...$lista)
    {
        $total = 0;
        foreach($lista as $n) {
        $total += $n;
        }

        echo $total;
    }

    add(5, 10, 20, 40);

    echo '<hr>';

    function avaliar_nome($nome) {
        if ($nome == 'joao') {
            return true;
        } else {
            return false;
        }
    }

    $nome = 'joao';

    if (avaliar_nome($nome)) {
        echo 'O cliente esta correto';
    }

    echo '<hr>';

    function teste() {

    }

    if (teste() == null) {
        echo 'Função com retorno igual a nulo';
    }
?>