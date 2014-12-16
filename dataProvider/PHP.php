<?php

namespace esky\dataProvider;

class PHP extends dataProviderAbstract
{

    public function load()
    {
        if(!file_exists($this->path)) {
            return array();
        }

        ob_start();
        $result = require_once($this->path);
        ob_end_clean();

        return (is_array($result)) ? $result : array();
    }
}
