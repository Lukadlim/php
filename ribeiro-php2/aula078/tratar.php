<style>
    * {
        font-family: Arial
    }
</style>

<?php
    echo '<pre>';

    print_r($_FILES);

    move_uploaded_file($_FILES['caixa_ficheiro']['tmp_name'], "C:/xampp/htdocs/aula-php/" . $_FILES['caixa_ficheiro']['name']);
?>