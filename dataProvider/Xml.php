<?php

namespace esky\dataProvider;

class Xml extends dataProviderAbstract
{

    public function load()
    {
        if(!file_exists($this->path)) {
            return array();
        }
        libxml_use_internal_errors(true);
        $result = simplexml_load_file($this->path);
        return (libxml_get_errors()) ? array() : $result;
    }
}
