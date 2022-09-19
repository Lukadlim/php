<?php
    function add($a, $b = 10, $c = 30) {
        echo "a = $a <br>";
        echo "b = $b <br>";
        echo "c = $c <br>";
        echo "Adicionando tudo o resultado é: " . $a + $b + $c;
        echo '<hr>';
    }

    add(100, 10, 300);
    add(c: 1000, a: 0);
    add(500, c: 1000);
?>