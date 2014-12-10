<?php

namespace esky;

use esky\dataProvider\dataProviderInterface;

class Client
{
    private $provider;

    public function setProvider(dataProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function output()
    {
        return $this->provider->load();
    }
}
