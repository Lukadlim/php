<?php
    $opcao = 2;

    // $nome = $opcao == 1 ? 'João' : 'Antonio';
    $opcao == 1 ? $nome = 'João' : $nome = 'Antonio';

    echo $nome;
    echo '<br>';

    ///////////////////////////////////////////////////////////////

    echo  $opcao == 1 ? 'SIM' : 'NÃO';
    echo '<br>';

    ///////////////////////////////////////////////////////////////
?>

<h2><?= $opcao == 1 ? 'SIM' : 'NÃO' ?></h2>
<h2 style="color: <?= $opcao == 1 ? 'red' : 'blue' ?>">Este texto tem a cor definida pelo PHP</h2>