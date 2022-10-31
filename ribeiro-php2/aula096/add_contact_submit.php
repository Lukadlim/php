<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        die('Acesso inválido');
    }

    require_once('inc/config.php');
    require_once('inc/EasyPDO.php');

    $db = New EasyPDO\EasyPDO(MYSQL_OPTIONS);

    $params = [
        ':name' => $_POST['text_name'],
        ':phone' => $_POST['text_phone'],
    ];

    $db->insert("INSERT INTO dados VALUES(0, :name, :phone)", $params);

    echo '<br>';
    echo 'Contato inserido com sucesso';
?>

<p><a href="index.php">Voltar para o início</a>
<span> | </span>
<a href="add_contatcts.php">Novo contato</a>
</p>