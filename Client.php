<?php

namespace esky;

class Client
{
    private $provider;
    private $output;

    public function __construct(\esky\dataProvider\dataProviderAbstract $provider, \esky\Output\OutputInterface $output)
    {
        $this->provider = $provider;
        $this->output   = $output;
    }

    public function output()
    {
        return $this->output->load($this->provider->load());
    }
}
