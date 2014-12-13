<?php

namespace esky\Template;

class TemplateFactory
{

    public static function create($type, $a, $b)
    {
        switch ($type) {
            case ">":
                return new GreaterThan($a, $b);
                break;
            case "<":
                return new LessThan($a, $b);
                break;
            case "=":
                return new Equal($a, $b);
                break;
            default:
                return new Blank($a, $b);
        }
    }

}
