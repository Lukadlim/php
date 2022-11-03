<?php
    if(!isset($_GET['id'])){
        die('Acesso negado');
    }

    require_once('inc/config.php');
    require_once('inc/EasyPDO.php');

    $db = New EasyPDO\EasyPDO(MYSQL_OPTIONS);

    $id_contact = aes_desencriptar($_GET['id']);

    if($id_contact === -1){
        die('ID inválido');
    }

    $params = [
        ':id' => $id_contact,
    ];

    $db->delete("DELETE FROM dados WHERE id_contact = :id", $params);

    echo 'Contato deletado com sucesso';
?>
<p><a href="index.php">Voltar para página inicial</a>
    <span> | </span>
    <a href="see_contacts.php">Ver contatos</a>
</p>