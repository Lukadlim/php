<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        for($c = 100; $c < 120; $c++){
            echo "<p class=\"red\">$c</p>";
        }
    ?>

    <hr>

    <?php for($c = 100; $c < 120; $c++): ?>
        <p class="red"><?= $c ?></p>
    <?php endfor; ?>
</body>
</html>