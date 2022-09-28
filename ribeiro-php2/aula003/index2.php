<?php
    $nomes = ['João', 'Carlos', 'Ana'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blue {
            color: blue;
        }
    </style>
</head>
<body>
    <?php
        echo '<ul>';
        foreach($nomes as $nome){
            echo "<li class=\"blue\">$nome</li>";
        }
        echo '</ul>';
    ?>

    <ul>
        <?php foreach($nomes as $nome): ?>
            <li class="blue"><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>