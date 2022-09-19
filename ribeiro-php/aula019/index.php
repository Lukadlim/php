<?php
    $x = 1;

    switch ($x) {
        case 5:
            echo 'O número é 5';
            break;
        case 10:
            echo 'O número é 10';
            break;
        case 15:
            echo 'O número é 15';
            break;
        default:
            echo 'O número é diferente de 5, 10 e 15.';
    }

    echo '<hr>';

    echo match($x) {
        5 => 'Parou no 5',
        10 => 'Parou no 10',
        15 => 'Parou no 15',
        default => 'É um número diferente de 5, 10 e 15'
    };

    echo '<hr>';

    $opcao = match($x) {
        2 => 'É 2',
        4, 5, 6 => 'É 4, 5 ou 6',
        default => 'É outro valor',
    };
    echo $opcao;

    echo '<hr>';

    switch ($x) {
        case 2:
            $opcao = 'É 2';
            break;
        case 4:
        case 5:
        case 6:
            $opcao = 'É 4, 5 ou 6';
            break;
        default:
            $opcao = 'É outro valor';
    }
    echo $opcao;

    echo '<hr>';

    switch ($x) {
        case 1:
            echo 'Inteiro'; break;
        case '1':
            echo 'String';
    }

    echo '<hr>';

    echo match ($x) {
        1 => 'Inteiro',
        '1' => 'String',
    };
?>