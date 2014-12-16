<?php

namespace esky\dataProvider;

class Json extends dataProviderAbstract
{

    public function load()
    {
        if(!file_exists($this->path)) {
            return array();
        }

        $json   = file_get_contents($this->path);
        $result = json_decode($json);
        if (json_last_error() == JSON_ERROR_NONE) {
            return $result;
        }
        return array();
    }

}
