<?php
    // $a = 'Esta é uma string';
    // $b = "Esta é outra string";

    // echo "$a <br>";
    // echo $b;

    /////////////////////////////////////////////////////////////////////////////

    // $a = 'João' . ' ' . 'Ribeiro A';
    // $b = 'João';
    // $b .= ' ' . 'Ribeiro B';

    // echo $a;
    // echo '<br>';
    // echo $b;

    /////////////////////////////////////////////////////////////////////////////

    // $nome = 'João';
    // $sobrenome = 'Ribeiro';
    // $nome_completo = $nome . ' ' . $sobrenome;

    // echo $nome_completo;

    /////////////////////////////////////////////////////////////////////////////

    // $nome = 'João';
    // $sobrenome = 'Ribeiro';
    // $nome_completo = "$nome $sobrenome";

    // echo $nome_completo;

    /////////////////////////////////////////////////////////////////////////////

    $cliente = 'João Ribeiro';
    $email = 'joao.ribeiro@hotmail.com';

    $texto1 = <<<LABEL
    Olá. sr. $cliente. <br>
    Serve a presente mensagem para informar que se encontra inscrito no próximo concurso. <br>
    Enviamos o regulamento para seu email $email <br>
    Obrigado pela sua simpatia <hr>
    LABEL;

    /////////////////////////////////////////////////////////////////////////////

    $texto2 = <<<'LABEL'
    Olá. sr. $cliente. <br>
    Serve a presente mensagem para informar que se encontra inscrito no próximo concurso. <br>
    Enviamos o regulamento para seu email $email <br>
    Obrigado pela sua simpatia
    LABEL;


    echo $texto1 . $texto2;
?>
    