<?php
    defined('CONTROL') or die('Access denied');

    $route = null;

    if(!verify_session()){
        $route = 'login';
    } else {
        $route = 'connected';
    }

    switch ($route) {
        case 'login':
            require_once('../views/login_frm.php');
            break;
    }
?>