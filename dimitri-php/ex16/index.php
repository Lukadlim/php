<?php
$carros = ["Uno", "Celta", "Audi", "Prisma", "C4"];

$carros[1] = "Brasilia";

$qnt = count($carros);

// echo $carros[1] . "<br>";

// echo "A quantidade de carros é $qnt";

// for ($c = 0; $c < $qnt; $c++){
//     echo $carros[$c]."<br>";
// }

// foreach ($carros as $carro){
//     echo "$carro <br>";
// }

$idade = ["João"=>45, "Maria"=>89, "Marlos"=>12];

// echo $idade["Maria"];

// foreach ($idade as $key => $value){
//     echo "$key tem $value anos <br>";
// }

// sort($carros);

// foreach ($carros as $carro){
//     echo "$carro <br>";
// }

// $nums = [8, 4, 9, 7];

// rsort($nums);

// foreach ($nums as $n){
//     echo "$n <br>";
// }

krsort($idade);

foreach ($idade as $age){
    echo $age. "<br>";
}

?>