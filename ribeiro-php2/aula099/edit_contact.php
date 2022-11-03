<?php
    if(!isset($_GET['id'])){
        die('Acesso inválido');
    }

    require_once('inc/config.php');
    require_once('inc/EasyPDO.php');

    $db = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

    $id_contact = aes_desencriptar($_GET['id']);

    if($id_contact == -1 || $id_contact == false)
    {
        die('Acesso inválido');
    }

    $params = [
        ':id_contact' => $id_contact,
    ];

    $contact = $db->select("SELECT * FROM dados WHERE id_contact = :id_contact", $params)[0];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add contacts</title>
</head>
<body>
    <form action="edit_contacts_submit.php" method="post">
        <input type="hidden" name="id_contact" value="<?= aes_encriptar($contact['id_contact'])?>">
        <p>
            <label for="iname">Nome: </label>
            <input type="text" name="text_name" id="iname" value="<?= $contact['nome']?>" required>
        </p>
        <p>
            <label for="itel">Telefone: </label>
            <input type="tel" name="text_phone" id="itel" value="<?= $contact['telefone'] ?>" required>
        </p>
        <p><input type="submit" value="Salvar"></p>
    </form>
    <p><a href="see_contacts.php">Voltar</a></p>
</body>
</html>