<?php

namespace esky\dataProvider;

abstract class dataProviderAbstract
{

    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    abstract public function load();

}
