<?php
    class Circulo
    {
        const PI = 3.14;
    }

    echo Circulo::PI;
    echo '<br>';

    $pi = new Circulo;
    echo $pi::PI;

    echo '<hr>';

    // const APP_NAME = 'Minha aplicação';
    // echo APP_NAME;
    echo '<br>';

    function teste(){
        // echo APP_NAME;
    }

    teste();
    echo '<br>';

    // echo 'Nome: ' . APP_NAME;

    echo '<hr>';

    if(!defined('APP_NAME')){
        define('APP_NAME', 'My app');
    }

    echo APP_NAME;
    echo '<br>';

    defined('CONSTANTE') or define('CONSTANTE', 'valor');

    echo CONSTANTE;
    echo '<br>';

    const NOMES = ['João', 'Ana', 'Carlos'];
    var_dump(NOMES[0]);
    echo '<br>';

    define('NAMES', ['João', 'Ana', 'Carlos']);
    var_dump(NAMES[2]);
?>