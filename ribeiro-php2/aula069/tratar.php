<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        die('Acesso negado');
    }

    // if(!isset($_POST['usuario'])){
    //     header('Location: index.html');
    // }

    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    echo 'OK!';
?>