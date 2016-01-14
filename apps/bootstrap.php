<?php

use Src\newClass;

require_once('core/Autoloader.php');
require_once('../vendor/autoload.php');
require_once('../config/settings.php');


$autoLoader = new Mvc\Autoloader();
$autoLoader->register();
$autoLoader->addNamespace('Apps', 'core');

$newClass = new newClass();
$newClass->Test();

$templater = new Mvc\Apps\Templater();
echo $templater->load();

