<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $nome = 'João'; ?>

    <h3>Página 1</h3>

    <p><?= $nome ?></p>

    <a href="pagina2.php?name=<?= $nome?>">Ir para a página 2</a>
</body>
</html>