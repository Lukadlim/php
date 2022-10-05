<?php
    $ficheiro = fopen('dados1.txt', 'w');
    fwrite($ficheiro, "Primeira frase.\n");
    fwrite($ficheiro, 'Segunda frase.');
    fclose($ficheiro);

    $ficheiro = fopen('dados1.txt', 'a');
    fwrite($ficheiro, "\nMais uma frase.");
    fclose($ficheiro);
?>