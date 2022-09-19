<?php
    function adicao($a, $b) {
        echo "$a + $b = " . $a + $b;
        echo '<br>';
    }

    adicao(10, 20);
    adicao(100, 200);

    echo '<hr>';

    function saudacao($algm) {
        echo "Bom dia, $algm <br>";
    }

    $nomes = ['João', 'Ana', 'Carlos'];

    foreach ($nomes as $nome) {
        saudacao($nome);
    }
?>