<?php
    // setcookie('leu_as_condicoes', true, time() + (365 * 24 * 60 * 60), '/');

    if(isset($_COOKIE['leu_as_condicoes'])){
        setcookie('leu_as_condicoes', null, -1, '/');
        echo '<p>Cookie eliminado</p>';
    }

    echo '<p>Terminado</p>';
?>