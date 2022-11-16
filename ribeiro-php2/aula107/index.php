<?php
    require_once('logger.php');

    // logger('Primeira mensagem');

    secret();

    echo '<br>';

    echo 'OK!';

    function secret(){
        logger('User entered in the secret area', 'warning');

        echo 'entered in the secret area!!!!';
    }
?>