<?php

namespace esky\Output;

class XmlOutput implements OutputInterface
{

    public function load($data)
    {
        if (!$data instanceof \SimpleXMLElement) {
            return array();
        }
        $result = array();
        foreach ($data as $item) {
            $type   = (string)$item['Type'];
            $code   = (string)$item->Code;
            $name   = (string)$item->Description;
            $value  = (string)$item->Value;

            $result[$type][$code]['name']   = $name;
            $result[$type][$code]['value']  = $value;
        }
        return $result;
    }

}