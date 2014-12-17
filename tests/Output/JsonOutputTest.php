<?php

namespace esky\Output;

class JsonOutputTest extends \PHPUnit_Framework_TestCase
{

    public function testLoadWithNonEmptyInput()
    {
        $output     = new JsonOutput();
        $provider   = new \esky\dataProvider\Json(__DIR__ . '/../../data/data.json');
        assertThat($output->load($provider->load()), is(nonEmptyArray()));
    }

    public function testLoadWithEmptyInput()
    {
        $output = new JsonOutput();
        assertThat($output->load(array()), is(emptyArray()));
    }

    public function testLoadWithWrongInput1()
    {
        $output = new JsonOutput();
        assertThat($output->load(array(1,2,3)), is(emptyArray()));
    }

    public function testLoadWithWrongInput2()
    {
        $output = new JsonOutput();
        assertThat($output->load('123'), is(emptyArray()));
    }

    public function tesEquals2Outputs()
    {
        $jsonOutput     = new JsonOutput();
        $arrayOutput    = new ArrayOutput();
        $provider       = new \esky\dataProvider\PHP(__DIR__ . '/../../data/data.php');
        assertThat(
            $jsonOutput->load(json_encode($provider->load())),
            is(equalTo($arrayOutput->load($provider->load()))));
    }

}