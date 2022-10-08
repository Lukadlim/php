<?php
    $data_divida = new DateTime('10-03-1997');
    $agora = new DateTime();

    $intervalo = $data_divida->diff($agora);
    // echo $intervalo->days . ' dias';
    // print_r($intervalo); 

    echo $intervalo->y * 12 + $intervalo->m . ' meses';
?>