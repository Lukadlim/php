<?php
   require_once('inc/config.php');
   require_once('inc/EasyPDO.php');
   use EasyPDO\EasyPDO;

   $db = new EasyPDO();

//    $db->insert("INSERT INTO contacts VALUES
//    (0, 
//    AES_ENCRYPT('Joao', UNHEX(SHA2('" . AES_KEY . "', 512))), 
//    AES_ENCRYPT('111', UNHEX(SHA2('" . AES_KEY . "', 512)))
//    )");

//    $db->insert("INSERT INTO contacts VALUES
//    (0, 
//    AES_ENCRYPT('Ana', UNHEX(SHA2('" . AES_KEY . "', 512))), 
//    AES_ENCRYPT('222', UNHEX(SHA2('" . AES_KEY . "', 512)))
//    )");

//    $db->insert("INSERT INTO contacts VALUES
//    (0, 
//    AES_ENCRYPT('Carlos', UNHEX(SHA2('" . AES_KEY . "', 512))), 
//    AES_ENCRYPT('333', UNHEX(SHA2('" . AES_KEY . "', 512)))
//    )");

    $results = $db->select("
    SELECT
    AES_DECRYPT(nome, UNHEX(SHA2('" . AES_KEY . "', 512))) nome,
    AES_DECRYPT(telefone, UNHEX(SHA2('" . AES_KEY . "', 512))) tefefone
    FROM contacts"
    );

    echo '<pre>';

    print_r($results);


   
?>