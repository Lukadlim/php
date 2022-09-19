<?php
    $dados = [
        0 => 10,
        'nome' => 'Antonio',
        'apelido' => 'Silva',
        10 => 10000,
        11 => 'Rua de lisboa',
        12 => 'Portugal',
    ];

    // echo $dados['11'];

    ////////////////////////////////////////////////////////

    $dados = [
        [10, 20, 30, 40],
        [100, 200, 300, 400],
        [1000, 2000, 3000, 4000],
    ];

    // echo $dados[1][2];

    ////////////////////////////////////////////////////////

    $cidades = [
        'portugal' => ['Lisboa', 'Porto', 'Coimbra'],
        'brasil' =>  ['Brasilia', 'São Paulo', 'Rio de Janeiro'],
        'espanha' => ['Madrid', 'Barcelona', 'Sevilha'],
    ];

    echo $cidades['brasil'][1];
    echo '<br>';
    echo $cidades['espanha'][0];
    echo '<br>';
    echo $cidades['portugal'][2];

?>