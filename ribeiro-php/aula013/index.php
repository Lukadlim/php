<?php
    $nome = 'joão';
    $apelido = 'ribeiro';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo '<h3>Meu nome é:</h3>';
        // echo "<h1>$nome $apelido</h1>";
    ?>

    <?php 
    // $x = mb_strlen($nome);
    // $x += strlen($apelido);


    // echo "<p>$nome $apelido</p>";
    // echo "<p>O meu nome tem $x caracteres</p>";
    ?>

    <p><?= "O meu nome é " . mb_strtoupper($nome) . " e o meu apelido é " . strtoupper($apelido) ?>.</p>
</body>
</html>

