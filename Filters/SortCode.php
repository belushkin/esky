<?php

namespace esky\Filters;

class SortCode implements FilterInterface
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
        if ($this->field != 'code') {
            return $value;
        }

        foreach (array_keys($value) as $key) {
            $keys = array();
            foreach ($value[$key] as $country => $money) {
                $keys[] = $country;
            }
            if ($this->direction == 'asc') {
                array_multisort($keys, SORT_ASC, $value[$key]);
            } else {
                array_multisort($keys, SORT_DESC, $value[$key]);
            }
        }
        return $value;
    }

}
