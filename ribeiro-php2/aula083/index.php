<?php
    session_start();

    $_SESSION['valor_index'] = 'Index';
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
    <h3>Página inicial</h3>

    <a href="servicos.php">Serviços</a>

    <?php if(isset($_SESSION['valor_servicos'])):?>
        <p><?= $_SESSION['valor_servicos']?></p>
    <?php endif;?>
</body>
</html>