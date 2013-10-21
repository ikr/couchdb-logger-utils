<?php
use Magomogo\CouchLogger\MonologHandler;
use Magomogo\CouchLogger\SilexExceptionLoggerProvider;

include __DIR__ . '/vendor/autoload.php';

try {
    new MonologHandler();
    new SilexExceptionLoggerProvider();

    echo "Ok\n";

} catch (Exception $e) {

    echo "Fail\n";

}