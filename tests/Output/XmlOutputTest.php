<?php

namespace esky\Output;

class XmlOutputTest extends \PHPUnit_Framework_TestCase
{

    public function testLoadWithNonEmptyInput()
    {
        $output     = new XmlOutput();
        $provider   = new \esky\dataProvider\Xml(__DIR__ . '/../../data/data.xml');
        assertThat($output->load($provider->load()), is(nonEmptyArray()));
    }

    public function testLoadWithEmptyInput()
    {
        $output = new XmlOutput();
        assertThat($output->load(array()), is(emptyArray()));
    }

    public function testOutputWithWrongXmlInput()
    {
        $xml    = simplexml_load_string('<root><node>123</node><foo><bar>456</bar></foo></root>');
        $output = new XmlOutput();
        assertThat($output->load($xml), is(nonEmptyArray()));
    }

}