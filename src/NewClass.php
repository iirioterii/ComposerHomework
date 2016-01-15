<?php

namespace Src;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class NewClass
{
    public function test ()
    {
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('app.log', Logger::WARNING));
        $log->addWarning('Foo');
    }
}