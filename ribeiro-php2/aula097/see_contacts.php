<?php
    require_once('inc/config.php');
    require_once('inc/EasyPDO.php');

    $db = New EasyPDO\EasyPDO(MYSQL_OPTIONS);
    $contacts = $db->select("SELECT * FROM dados");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver contatos</title>
    <style>
        * {
            font-family: Arial;
        }

        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
        }

        caption {
            padding-bottom: 10px;
            font-size: 1.5em;
        }

        td.sem_borda {
            border: 0px;
        }
    </style>
</head>
<body>
    <table>
        <caption><strong>Contatos existentes</strong></caption>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact):?>
            <tr>
                <td><?= $contact['nome'];?></td>
                <td><?= $contact['telefone']?></td>
                <td class="sem_borda"><a href="edit_contact.php?id=<?= $contact['id_contact']?>">Editar</a></td>
                <td class="sem_borda"><a href="delete_contact.php?id=<?= $contact['id_contact']?>">Eliminar</a></td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>
    <p><a href="index.php">Voltar</a></p>
</body>
</html>