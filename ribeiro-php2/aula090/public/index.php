<?php
    require_once '../config.php';

    $gestor = new PDO(
        "mysql:host=" . MYSQL_HOST .
        ";dbname=" . MYSQL_DATABASE,
        MYSQL_USER,
        MYSQL_PASSWORD
    );

    // $nome_cliente = 'Joao Ribeiro';
    $nome_cliente = 'Carlos Silva';

    // $comando = $gestor->prepare("INSERT INTO clientes VALUES (0, ?)");
    // $comando->execute([$nome_cliente]);


    $comando = $gestor->prepare("INSERT INTO clientes VALUES (0, :nome)");
    $comando->execute(
        [
          ':nome' => $nome_cliente
        ]
    );


?>