<?php
    // mkdir(dirname(__FILE__) . '/pasta1');
    // touch('ficheiro');

    // mkdir(dirname(__FILE__) . '/pasta1');
    // chdir('pasta1');
    // touch('ficheiro');

    // mkdir(dirname(__FILE__) . '/pasta1');
    // chdir(dirname(__FILE__) . '/pasta1' );
    // touch('ficheiro1');
    // chdir(dirname(__FILE__));
    // touch('ficheiro2');

    mkdir('pasta1');
    chdir('pasta1');
    touch('ficheiro1');
    chdir('../');
    touch('ficheiro2');
?>