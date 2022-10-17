<style>
    * {
        font-family: Arial
    }
</style>

<?php
    echo '<pre>';

    print_r($_FILES);

    $pasta_final = 'C:/xampp/htdocs/aula-php/';

    foreach($_FILES as $file){
        move_uploaded_file($file['tmp_name'], $pasta_final . $file['name']);
    }
?>