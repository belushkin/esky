<?php

namespace esky\Filters;

class SortName implements FilterInterface
{

    protected $field        = '';
    protected $direction    = 'asc';

    public function __construct($field, $direction)
    {
        $this->field        = strtolower(trim($field));
        $this->direction    = strtolower(trim($direction));
    }

    public function filter($value)
    {
        if ($this->field != 'name') {
            return $value;
        }

        foreach (array_keys($value) as $key) {
            if ($this->direction == 'asc') {
                uasort($value[$key], function($a, $b) {
                    return strcmp($a["name"], $b["name"]);
                });
            } else {
                uasort($value[$key], function($a, $b) {
                    return strcmp($b["name"], $a["name"]);
                });
            }
        }
        return $value;
    }

}
