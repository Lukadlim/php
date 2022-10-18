<style>
    * {
        font-family: Arial;
    }
</style>

<?php
    session_start();

    echo '<pre>';

    $_SESSION['nome'] = 'João';
    $_SESSION['valor'] = 1000;
    $_SESSION['frutas'] = ['Banana', 'Maçã', 'Melão'];
    print_r($_SESSION);

    echo '<hr>';

    unset($_SESSION['valor']);
    print_r($_SESSION);

    echo '<hr>';

    $_SESSION['nome'] = 'Ribeiro';
    print_r($_SESSION);

    echo '<hr>';

    echo "Nome: " . $_SESSION['nome'];
    echo '<br>';
    echo 'Uma fruta: ' . $_SESSION['frutas'][1];
    
    echo '<hr>';

    // session_destroy();
    print_r($_SESSION);
?>