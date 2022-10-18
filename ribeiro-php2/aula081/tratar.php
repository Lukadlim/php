<style>
    * {
        font-family: Arial
    }
</style>

<?php
    echo '<pre>';

    print_r($_FILES);

    $pasta_final = "C:/xampp/htdocs/aula-php/";

    

    foreach($_FILES as $file){
        if($file['size'] > 400000) continue;

        $dimensoes = getimagesize($file['tmp_name']);
        if($dimensoes[0] > 1299 || $dimensoes[1] > 1600) continue;

        move_uploaded_file($file['tmp_name'], $pasta_final . $file['name']);
    }
?>