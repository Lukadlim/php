<?php
    defined('CONTROL') or die('Access denied');


    $route = null;

    if(!verify_session() && $_SERVER['REQUEST_METHOD'] != 'POST'){
        $route = 'login';
    } elseif(!verify_session() && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $route = 'login_submit';
    }

    switch ($route) {
        case 'login':

            require_once('../views/login_frm.php');
            break;

        case 'login_submit':

            $db = New EasyPDO\EasyPDO;
            $params = [
                ':user' => $_POST['text_user']
            ];
            $result = $db->select("SELECT id_user, user FROM users WHERE user = :user", $params);

            print_r($result);

            break;
    }
?>

