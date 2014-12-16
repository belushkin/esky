<?php

namespace esky\dataProvider;

class BlankTest extends \PHPUnit_Framework_TestCase
{

    public function testDataProvider()
    {
        $blank = new Blank('/path/to/the/file');
        assertThat($blank->load(), is(emptyArray()));
    }

}