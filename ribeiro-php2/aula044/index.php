<?php
    $brasil = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $portugal = new DateTime('now', new DateTimeZone('Europe/Lisbon'));
    $japan = new DateTime('Asia/Tokyo');

    echo 'Brazil: ' . $brasil->format('Y-m-d H:i:s') . PHP_EOL;
    echo 'Portugal: ' . $portugal->format('Y-m-d H:i:s') . PHP_EOL;
    echo 'Japan: ' . $japan->format('Y-m-d H:i:s') . PHP_EOL;
?>