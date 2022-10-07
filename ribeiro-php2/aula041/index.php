<?php
    $data = new DateTime('01-01-2000 00:00:00');

    // $data->add(new DateInterval('P180D'));
    // $data->add(new DateInterval('P12W'));
    // $data->add(new DateInterval('P3M'));
    // $data->add(new DateInterval('PT72H'));

    // $data->sub(new DateInterval('P180D'));
    // $data->sub(new DateInterval('P12W'));
    // $data->sub(new DateInterval('PT13H'));

    $data->add(new DateInterval('PT80H15M30S'));

    echo $data->format('d-m-Y H:i:s');
?>