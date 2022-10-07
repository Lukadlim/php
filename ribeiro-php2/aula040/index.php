<?php
    // $data = new DateTime('2000-4-16 12:30:11');
    $data = new DateTime();
    // $data->setTime(22-5, 40, 35);
    $data->setDate(2022, 12, 31);

    echo $data->format('Y-m-d H:i:s');
?>