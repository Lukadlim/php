<?php
    $japan = new DateTime('now', new DateTimeZone('Asia/Tokyo'));

    echo $japan->format('Y-m-d H:i:s') . PHP_EOL;

    // $japan->modify('+1 minute');
    // $japan->modify('+15 minutes');
    // $japan->modify('+1 second');
    // $japan->modify('+15 seconds');
    // $japan->modify('+12 hours');
    // $japan->modify('+1 day');
    // $japan->modify('+7 days');
    // $japan->modify('+2 weeks');
    // $japan->modify('+3 months');
    // $japan->modify('+12 years');
    // $japan->modify('+1 year +6 months');
    $japan->modify('-1 hour -15 minutes');

    echo $japan->format('Y-m-d H:i:s') . PHP_EOL;
?>