<?php
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
        die('Acesso inválido');
    }

    require_once('inc/config.php');
    require_once('inc/EasyPDO.php');

    $db = New EasyPDO\EasyPDO(MYSQL_OPTIONS);

    $id_contact = aes_desencriptar($_POST['id_contact']);

    if($id_contact == -1 || $id_contact == false){
        die('Acesso inválido');
    }

    $params = [
        ':id_contact' => $id_contact,
        ':nome' => $_POST['text_name'],
        ':telefone' => $_POST['text_phone'],
    ];

    $db->update("UPDATE dados SET nome = :nome, telefone = :telefone WHERE id_contact = :id_contact", $params);

    echo '<strong>Dados alterados com sucesso</strong>';
?>

<p><a href="see_contacts.php">Voltar</a></p>