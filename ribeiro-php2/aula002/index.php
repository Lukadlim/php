<?php
    $nome = 'João';
    $apelido = 'Ribeiro';

    print "$nome $apelido <br>";

    print $nome . ' ' . $apelido;

    print '<br>';

    if(print($nome)){
        print " $apelido";
        print '<br>';
    }

    print strlen('Ribeiro');
    print '<br>';
?>

<p><?php print "$nome $apelido" ?></p>