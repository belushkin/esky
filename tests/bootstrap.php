<?php

error_reporting(E_ALL & ~E_NOTICE);

$autoload = new Composer\Autoload\ClassLoader();
$autoload->add('OHT', FWPATH);
$autoload->add('', FWPATH . 'Controllers');
$autoload->register();
