<?php
    // $hora = 12;

    // if ($hora < 12){
    //     echo "Bom dia!";
    // } elseif ($hora < 18){
    //     echo "Boa tarde!";
    // }else{
    //     echo "Boa noite!";
    // }

    $cor = "rosa";

    switch($cor){
        case "vermelho";
            echo "A cor é vermelho";
            break;
        case "azul";
            echo "A cor é azul";
            break;
        case "rosa";
            echo "A cor é rosa";
            break;
        default:
            echo "A cor $cor não é conhecida";
    }

?>