<?php

namespace esky\Output;

class JsonOutput implements OutputInterface
{
    public function load($data)
    {
        $result = array();
        foreach ($data as $item) {
            $result[$item[3]][$item[0]]['name']     = $item[1];
            $result[$item[3]][$item[0]]['value']    = $item[2];
        }
        return $result;
    }
}