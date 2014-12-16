<?php

namespace esky\dataProvider;

class JsonTest extends \PHPUnit_Framework_TestCase
{

    public function testDataProviderWithCorrectPath()
    {
        $json = new Json(__DIR__ . '/../../data/data.json');
        assertThat($json->load(), is(nonEmptyArray()));
    }

    public function testDataProviderWithInCorrectPath()
    {
        $json = new Json(null);
        assertThat($json->load(), is(EmptyArray()));
    }

    public function testDataProviderWithWrongData()
    {
        $json = new Json(__DIR__ . '/../../data/data.xml');
        assertThat($json->load(), is(EmptyArray()));
    }

}
