<?php
    $a = 1;

    function funcao() {
        $GLOBALS['a'] = 10;
    }

    funcao();

    echo $a;

    echo '<hr>';

    $b = 10;

    function funcao2() 
    {
        global $b;
        $b = 20;
    }

    funcao2();

    echo "<p>$b</p>";

    echo '<hr>';

    if (true) {
        $a = 10;
    }

    echo "$a <br>";

    for ($i = 0; $i < 10; $i++) {
        $x = 1000;
    }

    echo "$i e $x";
?>