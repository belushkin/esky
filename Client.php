<?php

namespace esky;

class Client
{
    private $provider;

    public function setProvider(\esky\dataProvider\dataProviderAbstract $provider)
    {
        $this->provider = $provider;
    }

    public function output()
    {
        return $this->provider->load();
    }
}
