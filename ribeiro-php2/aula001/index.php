<?php
    $nome = 'João';
    $apelido = 'Ribeiro';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .txt_red {
            color: red;
        }
    </style>
</head>
<body>
    <?php echo $nome . ' ' . $apelido ?> 
    <br>

    <?php echo "$nome $apelido" ?>
    <br>

    <?php echo 'Bom dia ', $nome, ' ', $apelido ?>

    <h3><?php echo "$nome $apelido" ?></h3>

    <h3 class="txt_red"><?php echo "$nome $apelido" ?></h3>

    <?php echo '<h3 class="txt_red">', "$nome $apelido", '</h3> '?>

    <h3 class="txt_red"><?= "$nome $apelido" ?></h3>

    <p>Nome do cliente: <strong><?= "$nome $apelido" ?></strong></p>

    <p><?= substr($apelido, 0, 5) ?></p>
</body>
</html>