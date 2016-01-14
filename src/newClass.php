<?php

namespace Src;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class newClass
{
    public function Test ()
    {
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addWarning('Foo');
    }
}