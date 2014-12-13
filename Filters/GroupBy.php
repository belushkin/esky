<?php

namespace esky\Filters;

class GroupBy implements FilterInterface
{

    protected $field = null;

    public function __construct($field = null)
    {
        $this->field = $field;
    }

    public function filter($value)
    {
        if (isset($value[$this->field])) {
            return array($this->field => $value[$this->field]);
        }
        return $value;
    }

}
