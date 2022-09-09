<?php
$a = 40;
$b = 20;

// function soma(){
//     $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
// }

// soma();
// echo $c;

// function soma(){
//     global $a, $b, $c;

//     $c = $a + $b;
// }

// soma();
// echo $c;

function texto($text){
    echo $_SERVER[$text] . "<br>";
}

texto("PHP_SELF");
texto("SERVER_NAME");
texto("HTTP_HOST");
texto("REMOTE_ADDR");
texto("HTTP_USER_AGENT");

?>