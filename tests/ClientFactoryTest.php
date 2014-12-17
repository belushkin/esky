<?php

namespace esky;

use \Mockery as m;

class ClientFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function tearDown()
    {
        m::close();
    }

    public function testCreateClient()
    {
        $provider   = m::mock('esky\dataProvider\Json');
        $output     = m::mock('esky\Output\JsonOutput');

        $client   = ClientFactory::create($provider, $output);
        assertThat($client, is(anInstanceOf('esky\Client')));
    }

}