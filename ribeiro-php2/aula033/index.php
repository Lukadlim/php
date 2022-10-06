<?php
    $texto = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas incidunt optio ad laboriosam quo soluta sit blanditiis numquam delectus, aliquam veniam quod nostrum accusamus rerum esse totam dignissimos, quos vel!";

    // file_put_contents('texto_completo.txt', $texto);

    $texto = file_get_contents('texto_completo.txt');

    echo $texto;
?>