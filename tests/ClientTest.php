<?php

namespace esky;

use \Mockery as m;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function tearDown()
    {
        m::close();
    }

    public function testOutput()
    {
        $provider   = m::mock('esky\dataProvider\Json');
        $output     = m::mock('esky\Output\JsonOutput');

        $provider->shouldReceive('load')->once();
        $output->shouldReceive('load')->once()->andReturn(json_encode(array(1=>2)));

        $client   = ClientFactory::create($provider, $output);
        assertThat($client->output(), is(equalTo('{"1":2}')));
    }

}