<?php

namespace esky\dataProvider;

class XmlTest extends \PHPUnit_Framework_TestCase
{

    public function testDataProviderWithCorrectPath()
    {
        $xml = new Xml(__DIR__ . '/../../data/data.xml');
        assertThat($xml->load(), allOf(
            anObject(),
            anInstanceOf('SimpleXMLElement'),
            set('Item'))
        );
    }

    public function testDataProviderWithInCorrectPath()
    {
        $xml = new Xml(null);
        assertThat($xml->load(), is(EmptyArray()));
    }

    public function testDataProviderWithWrongData()
    {
        $xml = new Xml(__DIR__ . '/../../data/data.json');
        assertThat($xml->load(), is(EmptyArray()));
    }

}
