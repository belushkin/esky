<?php

namespace esky;

use Client;
use esky\dataProvider\Json;

require 'vendor/autoload.php';

//spl_autoload_register(
//    function ($pClassName) {
//        spl_autoload(strtolower(str_replace("\\", "/", $pClassName)));
//    }
//);

echo __NAMESPACE__;

//$client = new Client();
//$client->setProvider(new Json(__DIR__ . '/data/data.json'));
//echo $client->output();
