<?php
    session_start();

    $_SESSION['valor_servicos'] = 'Serviços';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Página serviços</h3>

    <a href="index.php">Voltar</a>

    <?php if(isset($_SESSION['valor_index'])):?>
        <p><?= $_SESSION['valor_index']?></p>
    <?php endif;?>
</body>
</html>