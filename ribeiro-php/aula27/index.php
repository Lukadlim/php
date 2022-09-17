<?php
    function multiplicar($n1, $n2 = 2) {
        echo "$n1 x $n2 = " . $n1 * $n2;
        echo '<br>';
    }

    multiplicar(10);
    multiplicar(10, 20);

    echo '<hr>';

    function dividir($a, $b = 2) {
        echo "$a ÷ $b = " . $a / $b;
        echo '<br>';
    }

    dividir(10);
    dividir(7);
?>