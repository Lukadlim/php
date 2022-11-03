<?php
    define('MYSQL_OPTIONS', [
        'db_host' => 'localhost',
        'db_name' => 'contacts',
        'db_user' => 'user_contacts',
        'db_pass' => 'FAvEv1yIhAPe',
        'db_char' => 'utf8',
    ]);

    define('AES_KEY', 'MwLm739FmdaCWSDSw91SyzdAcChbVbv0');
    define('AES_IV', 'Ru1mhitPo5Zq4c5C');

    function aes_encriptar($valor)
    {
        return bin2hex(openssl_encrypt($valor, 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV));
    }

    function aes_desencriptar($hash)
    {
        if(strlen($hash) % 2 != 0){
            return -1;
        }

        return openssl_decrypt(hex2bin($hash), 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV);
    }
?>