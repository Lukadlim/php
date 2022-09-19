<?php

    $nmrs = [1, 2, 3, 10, 20, 30];
    $nomes = ['João', 'Ana', 'Carlos'];

    // var_dump($nmrs);
    // echo '<br>';
    // var_dump($nomes[0]);

    ///////////////////////////////////////////////////////

    // $dados = [
    //     10 => 1000,
    //     20 => 2000,
    //     30 => 3000,
    // ];

    // $dados[] = 4000; 

    // echo $dados[30];
    // echo '<br>';
    // var_dump($dados);

    ///////////////////////////////////////////////////////

    $valores = [10, 20, 30];
    $valores[1] = 2000;
    $valores[] = 4000;

    // var_dump($valores);
    // echo '<br>';
    // echo "Os valores são $valores[0] e $valores[2]"

    ///////////////////////////////////////////////////////

    $dados = [
        'A' => 20,
        'B' => 30,
        'C' => 40,
        'D' => 50,
        'E' => 60,
    ];

    // echo $dados['A'];
    // echo '<br>';
    // var_dump($dados);

    $dados = [
        'nome' => 'João',
        'email' => 'joao@gmail.com',
        'nacionalidade' => 'Portugal',
        'telefone' => 'xxxx-xxxx',
    ];

    // echo $dados['nome'];
    // echo '<br>';
    // var_dump($dados);

    ///////////////////////////////////////////////////////

    $dados = [
        'nome' => 'João',
        'nome' => 'Carlos',
    ];

    echo $dados['nome'];
?>