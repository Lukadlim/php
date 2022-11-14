<?php
    session_start();

    define('CONTROL',  true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLUBE</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center">CLUBE</h1>

    <?php
        require_once('../libs/config.php');
        require_once('../libs/EasyPDO.php');
        require_once('../libs/functions.php');

        require_once('route.php');
    ?>
</body>
</html>

<script src="assets/bootstrap.bundle.min.js"></script>