<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = htmlspecialchars($_GET['nome']);
    ?>

    <h3>Página 2</h3>

    <p><?= $nome?></p>

    <a href="index.php">Ir para a página 1</a>
    
</body>
</html>