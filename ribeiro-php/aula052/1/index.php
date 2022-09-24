<?php
    include 'config.php';

    echo NOME_APLICACAO;
    echo '<br>';

    include 'inc/dados.php';
    
    echo $nome;
    echo '<br>';

    include '../outro_script.php';

    echo $valor;
    echo '<br>';

    include 'C:/xampp/htdocs/aula-php/1/inc/dados2.php';

    echo $hoje->format('d-m-y');
?>