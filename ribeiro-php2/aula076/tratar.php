<style>
    * {
        font-family: Arial
    }
</style>

<?php
    echo '<pre>';

    print_r($_POST);

    // $valores = explode(' ', $_POST['data']);
    // echo "<p>Reunião será no dia $valores[0] ás $valores[1]</p>";

    $valores = explode(' to ', $_POST['data']);
    echo "<p>Cupom válido do dia $valores[0] ao dia $valores[1].</p>"
?>