<?php
    $nomes = ['João', 'Ana', 'Carlos'];

    foreach ($nomes as $nome) {
        echo $nome . '<br>';
    }

    echo '<hr>';

    $paises = [
        'Brasil' => 'Brasília',
        'Portugal' => 'Lisboa',
        'Espanha' => 'Madrid',
    ];

    foreach ($paises as $key => $value) {
        echo "A capital de $key é $value. <br>";
    }
?>