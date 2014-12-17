<?php

namespace esky\Output;

class ArrayOutputTest extends \PHPUnit_Framework_TestCase
{

    public function testLoadWithNonEmptyInput()
    {
        $output = new ArrayOutput();
        assertThat($output->load(array(1)), is(nonEmptyArray()));
    }

    public function testLoadWithEmptyInput()
    {
        $output = new ArrayOutput();
        assertThat($output->load(array()), is(emptyArray()));
    }

    public function testLoadWithWrongInput()
    {
        $output = new ArrayOutput();
        assertThat($output->load('123'), is(arrayValue()));
    }

}