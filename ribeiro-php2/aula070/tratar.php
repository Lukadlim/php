<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        die('Acesso negado');
    }
    

    if(!isset($_POST['usuario']) || !isset($_POST['senha'] )){
        header('Location: index.html');
    }

    if($_POST['usuario'] != 'joao' || $_POST['senha'] != '123'){
        echo 'Login inválido';
        exit;
    }

    echo 'Seja bem vindo';
?>