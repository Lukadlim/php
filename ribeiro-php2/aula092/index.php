<?php
    require_once('libs/EasyPDO.php');
    require_once('config.php');
    use EasyPDO\EasyPDO;

    // $gestor = New EasyPDO([
    //     'db_host' => 'localhost',
    //     'db_name' => 'teste',
    //     'db_user' => 'user_teste',
    //     'db_pass' => '7I38M3muboF2',
    //     'db_char' => 'utf8',
    // ]);
    // $clientes = $gestor->select("SELECT * FROM clientes");

    $db_teste = New EasyPDO(MYSQL_1);
    $clientes = $db_teste->select("SELECT * FROM clientes");

    $db_loja = New EasyPDO(MYSQL_2);
    $produtos = $db_loja->select("SELECT * FROM produtos");

    echo '<pre>';
    print_r($clientes);
    print_r($produtos);
?>

 