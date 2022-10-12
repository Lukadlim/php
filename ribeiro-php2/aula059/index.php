<?php
    if(isset($_COOKIE['meu_cookie'])){
        echo $_COOKIE['meu_cookie'];
    } else {
        setrawcookie('meu_cookie', date('H:i:s'));
    }

    echo '<p>Fim</p>';
?>