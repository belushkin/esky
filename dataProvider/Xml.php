<?php

namespace esky\dataProvider;

class Xml extends dataProviderAbstract
{

    public function load()
    {
        return simplexml_load_file($this->path);
    }
}
