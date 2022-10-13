<?php
    // setcookie('minha_opcao', 10, time() + (365 * 24 * 60 *60), '/');

    if(isset($_COOKIE['minha_opcao'])){
        setcookie('minha_opcao', 1000, time() + (365 * 24 * 60 * 60), '/');
        echo '<p>Cookie alterado</p>';
    }

    echo '<p>terminado</p>';
?>