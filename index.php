<?php

error_reporting(E_ALL);

use esky\dataProvider\Json;
use esky\dataProvider\PHP;
use esky\dataProvider\Xml;
use esky\Output\ArrayOutput;
use esky\Output\JsonOutput;
use esky\Output\XmlOutput;

require 'vendor/autoload.php';

$opts = array(
    'php'   => \esky\ClientFactory::create(new PHP(__DIR__ . '/data/data.php'),     new ArrayOutput()),
    'json'  => \esky\ClientFactory::create(new Json(__DIR__ . '/data/data.json'),   new JsonOutput()),
    'xml'   => \esky\ClientFactory::create(new Xml(__DIR__ . '/data/data.xml'),     new XmlOutput())
);

assert($opts['php'] instanceof \esky\Client);
assert($opts['json'] instanceof \esky\Client);
assert($opts['xml'] instanceof \esky\Client);

$options = getopt("s:");
if (empty($options) ) {
    print "There was a problem reading in the options.\n\n";
    exit(1);
}
$errors = array();
print_r($options);
//var_dump(getopt("s:"));

//print_r($opts['json']->output());
