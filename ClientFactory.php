<?php

namespace esky;

class ClientFactory
{

    public static function create(\esky\dataProvider\dataProviderAbstract $provider, \esky\Output\OutputInterface $output)
    {
        return new Client($provider, $output);
    }
}
