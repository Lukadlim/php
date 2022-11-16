<?php
    require_once(dirname(__FILE__) . '/vendor/autoload.php');

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    function logger($msg, $mode = 'info'){

        $logger = new Logger('logs');
        $logger->pushHandler(new StreamHandler(dirname(__FILE__) . '/logs.txt'));

        switch($mode){
            case 'info':
                $logger->info($msg);
                break;
            case 'warning':
                $logger->warning($msg);
                break;
            case 'error':
                $logger->error($msg);
                break;
            case 'debug':
                $logger->debug($msg);
                break;
            case 'notice':
                $logger->notice($msg);
                break;
            case 'critical':
                $logger->critical($msg);
                break;
            case 'alert':
                $logger->alert($msg);
                break;
            case 'emergency':
                $logger->emergency($msg);
                break;
            default:
                $logger->info($msg);
                break;
        }
    }
?>
