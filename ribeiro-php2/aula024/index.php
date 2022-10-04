<?php
   $place = 'da sala';
   $tot_pe = 123;

   echo sprintf('Existem %s pessoas dentro %s', $tot_pe, $place);
   echo '<br>';

   echo sprintf('Dentro %2$s foram encontrados %1$d pessoas', $tot_pe, $place);
   echo '<br>';

   echo sprintf('Dentro %2$s foram encontradas %1$d pessoas. %1$d é a capcidade máxima %2$s.', $tot_pe, $place);
   echo '<br>';

   echo sprintf("Capcidade: %'-10d", $tot_pe);
   echo '<br>';
   
   echo sprintf('Dentro %2$s estão %1$08d pessoas',$tot_pe, $place)
?>