<?php
    for ($n1 = 0; $n1 < 20; $n1++) {
        if ($n1 == 10) {
            break;
        }
        echo $n1 . '<br>';
    }

    echo '<hr>';

    $nomes = ['João', 'Ana', 'Carlos'];

    foreach ($nomes as $nome) {
        echo $nome . '<br>';
        if ($nome == 'Ana') {
            break;
        }
    }

    echo '<hr>';

    for ($n = 0; $n < 20; $n++) {
        if ($n == 10) {
            continue;
        }
        echo $n . '<br>';
    }

    echo '<hr>';

    foreach ($nomes as $nome) {
        if ($nome == 'Ana') {
            continue;
        }
        echo $nome . '<br>';
    }

    echo '<hr>';

    for ($n = 0; $n < 20; $n++) {
        if ($n == 10) {
            goto teste;
        }
        echo $n . '<br>';
    }

    echo 'Fim do código <br>';

    teste:
        echo 'Terminou aqui';
?>