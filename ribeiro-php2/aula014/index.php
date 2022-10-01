<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<?php
    $a = 'Frase de testes';

    echo '<pre>';
    print_r(str_split($a));

    echo '<hr>';

    var_dump(str_split($a, 3));

    echo '<hr>';

    $a = 'É para testar esta operação';

    var_dump(mb_str_split($a, 3));
?>