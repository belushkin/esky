<?php

namespace esky\dataProvider;

class Json extends dataProviderAbstract
{

    public function load()
    {
        return json_decode(file_get_contents($this->path));
    }
}
