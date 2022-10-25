<?php
    require_once '../config.php';

    $gestor = new PDO(
        "mysql:host=" . MYSQL_HOST .
        ";dbname=" . MYSQL_DATABASE,
        MYSQL_USER,
        MYSQL_PASSWORD
    );

    // $clientes = $gestor->query("SELECT * FROM clientes")->fetchall(PDO::FETCH_ASSOC);
    // echo '<pre>';
    // print_r($clientes);

    // $gestor->query("INSERT INTO clientes VALUES(0, 'Francisco')");

    // $gestor->query("UPDATE clientes SET nome = 'António Manuel' WHERE id_cliente = 3");

    $gestor->query("DELETE FROM clientes WHERE id_cliente = 3");


?>