<?php

error_reporting(E_ALL);

require 'vendor/autoload.php';

$options = getopt("s:g::f::");
if (empty($options) ) {
    print "There was a problem reading in the options.\n\n";
    return false;
}

$dataSource     = (in_array($options['s'], array('php', 'json', 'xml')))    ? $options['s'] : 'blank';
$filterGroupBy  = empty($options['g'])                                      ? ''            : $options['g'];
$filterByField  = empty($options['f'])                                      ? ''            : $options['f'];

$opts = array(
    'php'   => \esky\ClientFactory::create(
                    new \esky\dataProvider\PHP(__DIR__ . '/data/data.php'),
                    new esky\Output\ArrayOutput()
                ),
    'json'  => \esky\ClientFactory::create(
                    new \esky\dataProvider\Json(__DIR__ . '/data/data.json'),
                    new esky\Output\JsonOutput()
                ),
    'xml'   => \esky\ClientFactory::create(
                    new \esky\dataProvider\Xml(__DIR__ . '/data/data.xml'),
                    new esky\Output\XmlOutput()
                ),
    'blank' => \esky\ClientFactory::create(
                    new \esky\dataProvider\Blank(null),
                    new esky\Output\ArrayOutput()
                )
);

$filter = new \esky\Filters\Filter();
$filter->addFilter(new \esky\Filters\GroupBy($filterGroupBy));
$filter->addFilter(new \esky\Filters\Code($filterByField));
$filter->addFilter(new \esky\Filters\Price($filterByField));
$filter->addFilter(new \esky\Filters\Name($filterByField));

print_r($filter->filter($opts[$dataSource]->output()));

