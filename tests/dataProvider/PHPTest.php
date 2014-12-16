<?php

namespace esky\dataProvider;

class PHPTest extends \PHPUnit_Framework_TestCase
{

    public function testDataProviderWithCorrectPath()
    {
        $php = new PHP(__DIR__ . '/../../data/data.php');
        assertThat($php->load(), is(nonEmptyArray()));
    }

    public function testDataProviderWithInCorrectPath()
    {
        $php = new PHP(null);
        assertThat($php->load(), is(EmptyArray()));
    }

    public function testDataProviderWithWrongData()
    {
        $php = new PHP(__DIR__ . '/../../data/data.xml');
        assertThat($php->load(), is(EmptyArray()));
    }

}
