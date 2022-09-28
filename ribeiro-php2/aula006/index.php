<?php
    $a = " Isto é uma string.  ";

    echo '<pre>';

    echo $a;
    echo '<br>';

    echo trim($a);
    echo '<br>';

    echo "<p>$a";
    echo '<br>';
    echo $b = trim($a) . "</p>";

    /////////////////////////////////////////////////////////////

    echo '<hr> </pre>';

    $a = 'abcdefa';
    echo trim($a, 'a');
    echo '<br>';

    echo trim($a, 'af');
    echo '<br>';

    echo trim($a, 'abef');

    //////////////////////////////////////////////////////////////////

    echo '<hr>';

    // $usuario = trim($_POST['usuario']);


?>