<?php
    use EasyPDO\EasyPDO;

    defined('CONTROL') or die('Access denied');


    $route = null;

    if(!verify_session() && $_SERVER['REQUEST_METHOD'] != 'POST'){
        $route = 'login';
    } elseif(!verify_session() && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $route ='login_submit';
    } else {
        $route = 'connected';
    }

    switch ($route) {
        case 'login':

            require_once('../views/login_frm.php');
            break;

        case 'login_submit':

            $db = New EasyPDO();
            $params = [
                ':user' => $_POST['text_user']
            ];
            $result = $db->select("SELECT id_user, user, pass FROM users WHERE user = :user", $params);

            if(count($result) == 0){
                $erro = 'Login inválido(1)';
                require_once('../views/login_frm.php');
                return;
            }

            $user = $result[0];

            if(password_verify($_POST['text_pass'], $user['pass'])){
                $_SESSION['user'] = $user['user'];
                header("Location: index.php");
                return;
            } else {
                $erro = 'Login inválido(2)';
                require_once('../views/login_frm.php');
                return;
            }

            break;


        case 'connected':
            $db = new EasyPDO;
            $users = $db->select("
                SELECT
                user,
                AES_DECRYPT(full_name, UNHEX(SHA2('" . AES_KEY . "', 512))) full_name
                FROM users
            ");

            require_once('../views/see_users.php');

            break;
    }
    
?>

