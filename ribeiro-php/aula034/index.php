<?php
    function bsc_num()
    {
        for ($c = 0; $c < 10; $c++) {
            yield $c;
        }
    }

    foreach (bsc_num() as $n) {
        echo "$n <br>";
    }

   echo '<hr>';
   
   function bsc_nomes()
   {
    yield 'João';
    yield 'Maria';
    yield from ['Carlos', 'Ana', 'Antonio'];
    yield 'Fernando';
   }

   foreach(bsc_nomes() as $nome) {
    echo "$nome <br>";
   }

   