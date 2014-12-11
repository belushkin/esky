<?php

namespace esky\dataProvider;

class PHP extends dataProviderAbstract
{

    public function load()
    {
        return require_once($this->path);
    }
}
