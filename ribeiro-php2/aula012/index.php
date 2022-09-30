<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<?php
    $str_nomes = 'João,Carlos,Ana,Antonio';

    echo '<pre>';
    var_dump(explode(',', $str_nomes));
    echo '<br>';

    var_dump(explode(',', $str_nomes, 2));
    echo '</pre>';
    echo '<br>';

    $nomes = ['João', 'Carlos', 'Ana', 'Antonio'];
    echo implode('/', $nomes);
?>