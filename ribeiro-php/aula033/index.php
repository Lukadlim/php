<?php
$x = 20;
$y = 30;
   
    $myClosure = function($z) use($x, $y) {
        $y += 1000;
        echo "$z $x $y <br>";
    };

    $myClosure(10);

    echo $y;

    echo '<hr>';

    $x = 20;
    $y = 30;

    $myFn = fn($z) => "$x $y $z";

    echo $myFn(10);
?>