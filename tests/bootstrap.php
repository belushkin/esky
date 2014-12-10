<?php

error_reporting(E_ALL);

$autoload = new Composer\Autoload\ClassLoader();
$autoload->add('OHT', FWPATH);
$autoload->add('', FWPATH . 'Controllers');
$autoload->register();
