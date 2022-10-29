<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        die('Acesso inválido');
    }

    require_once('inc/config.php');
    require_once('inc/EasyPDO.php');

    $bd = New EasyPDO\EasyPDO(MYSQL_OPTIONS);

    $params = [
        ':name' => $_POST['text_name'],
        ':phone' => $_POST['text_phone'],
    ];

    $bd->insert("INSERT INTO dados VALUES(0, :name, :phone)", $params);

    echo '<br>';
    echo 'OK!';
?>