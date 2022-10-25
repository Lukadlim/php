<?php
    require_once('libs/EasyPDO.php');

    use EasyPDO\EasyPDO;

    echo 'Olá mundo';

    $gestor = New EasyPDO();

    $clientes = $gestor->select("SELECT * FROM clientes");

    echo '<pre>';

    print_r($clientes);
?>