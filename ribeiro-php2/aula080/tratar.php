<style>
    * {
        font-family: Arial
    }
</style>

<?php
    echo '<pre>';

    print_r($_FILES);

    $pasta_final = "C:/xampp/htdocs/aula-php/";

    $mime_accept = [
        'image/png', 'image/jpeg',
    ];

    foreach($_FILES as $file){
        if(in_array($file['type'], $mime_accept)){
            move_uploaded_file($file['tmp_name'], $pasta_final . $file['name']);
        }
    }
?>