<?php
    $x = 0;

    do {
        echo $x++ . '<br>';
    } while ($x < 1);

    echo '<hr>';

    $x = 0;

    do 
        echo $x++ . '<br>';
    while ($x < 10);

    echo '<hr>';

    $x = 0;

    do echo $x++ . '<br>'; while ($x < 10);
?>