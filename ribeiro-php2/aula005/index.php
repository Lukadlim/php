<?php
    $dados = [
        ['João', 'M', 'Portugal'],
        ['Ana', 'F', 'Brasil'],
        ['Carlos', 'M', 'Angola'],
        ['Matilde', 'F', 'Moçambique'],
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Gênero</th>
            <th>País</th>
        </tr>
        <tr>
            <?php for($c = 0; $c < 3; $c++): ?>
                <td><?= $dados[0][$c] ?></td>
            <?php endfor;?>
        </tr>
        <tr>
            <?php for($c = 0; $c < 3; $c++): ?>
                <td><?= $dados[1][$c] ?></td>
            <?php endfor;?>
        </tr>
        <tr>
            <?php for($c = 0; $c < 3; $c++): ?>
                <td><?= $dados[2][$c] ?></td>
            <?php endfor;?>
        </tr>
        <tr>
            <?php for($c = 0; $c < 3; $c++): ?>
                <td><?= $dados[3][$c] ?></td>
            <?php endfor;?>
        </tr>
    </table>

    <hr>

    <table>

        <thead>
            <th>Nome</th>
            <th>Gênero</th>
            <th>País</th>
        </thead>

        <tbody>
            <?php foreach($dados as $pessoa): ?>
                <tr>
                    <td><?= $pessoa[0] ?></td>
                    <td><?= $pessoa[1] ?></td>
                    <td><?= $pessoa[2] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        
    </table>
</body>
</html>