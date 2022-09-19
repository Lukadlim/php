<?php
    function outraFuncao($a) {
        $x = func_get_arg(0);
        $y = func_get_arg(1);
        $z = func_get_arg(2);

        echo "$x $y $z";

        echo '<br>';

        echo func_num_args();
    };

    outraFuncao(10, 5, 30);

    echo '<hr>';

    function minha_funcao(...$argumentos) {
        foreach($argumentos as $v) {
            echo "$v <br>";
        }
    }

    minha_funcao(10, 20, 30, 40);
?>

