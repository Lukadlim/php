<?php
    require_once('libs/EasyPDO.php');
    require_once('config.php');
    use EasyPDO\EasyPDO;

    $bd = New EasyPDO(MYSQL_1);

    // $params = [
    //     ':nome' => 'Cristina',
    //     ':id' => '6',
    // ];

    // $bd->update("UPDATE clientes SET nome = :nome WHERE id_cliente = :id", $params);

    $bd->delete("DELETE FROM clientes WHERE id_cliente = :id", [':id' => 5]);

    echo 'PRONTO!';
?>

 