<?php
    $paises = file(dirname(__FILE__) . '/paises.txt', FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES);

    print_r($paises);

?>