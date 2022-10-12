<?php
    $nomes = ['João', 'Ana', 'Carlos', 'João',
    'Sara', 'Maria', 'Ana', 'Antonio'];

    $final = array_unique($nomes);

    print_r($final);

    $valores = ['100', '+100', '1000', '0200', '200'];

    $final = array_unique($valores, SORT_NUMERIC);
    print_r($final);
?>