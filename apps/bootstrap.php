<?php

use Src\NewClass;

require_once('../vendor/autoload.php');
require_once('core/Autoloader.php');
require_once('../config/settings.php');


$autoLoader = new Mvc\Autoloader();
$autoLoader->register();
$autoLoader->addNamespace('Apps', 'core');

$newClass = new NewClass();
$newClass->test();

$templater = new Mvc\Apps\Templater();
echo $templater->load();

