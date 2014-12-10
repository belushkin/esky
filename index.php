<?php

error_reporting(E_ALL);

use esky\dataProvider\Json;

require 'vendor/autoload.php';

$client = new esky\Client();
$client->setProvider(new Json(__DIR__ . '/data/data.json'));
print_r($client->output());
