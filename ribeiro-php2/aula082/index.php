<?php
    echo  'SESSÕES';

    session_start();

    // $_SESSION['valor'] = 1000;
    // $_SESSION['usuario'] = 'joao';

    echo '<br>';

    echo $_SESSION['usuario'];
?>