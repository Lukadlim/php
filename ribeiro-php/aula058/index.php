<?php
    $a = 1;
    if(isset($a)){
        echo 'A variável existe';
    } else {
        echo 'A variável NÃO existe';
    }
    echo '<br>';

    $b = null;

    echo isset($b) ? 'Sim' : 'Não';

    echo '<hr>';

    $b = 'João';
    var_dump(empty($b));
    echo '<br>';

    $c = false;
    var_dump(empty($c));
    echo '<br>';

    $nomes = [];
    var_dump(empty($nomes));
    echo '<br>';

    $outro = null;
    var_dump(empty($outro));

    echo '<hr>';

    $b = 'João';
    var_dump(is_null($b));
    echo '<br>';

    $c = null;
    var_dump(is_null($c));

    // is_null($d);

    echo '<hr>';

    $a = 'João';
    echo $a;
    unset($a);
    // var_dump($a);
    echo '<br>';

    $b = 'Antonio';
    $b = null;
    var_dump($b);
?>
