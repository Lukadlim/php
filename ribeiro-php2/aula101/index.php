<?php
    $password = 'abc123';

    echo md5($password);

    echo '<hr>';

    echo password_hash($password, PASSWORD_DEFAULT);

    echo '<hr>';

    if(password_verify($password, '$2y$10$5LMUjp5lKMezFBJFRcgHbej/RYAJakHskFDTMtrCgsr9Hp.2u92Nm')){
        echo 'Valid login';
    } else {
        echo 'Invalid login';
    }
?>