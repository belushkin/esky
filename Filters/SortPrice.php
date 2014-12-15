<?php

namespace esky\Filters;

class SortPrice implements FilterInterface
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
        if ($this->field != 'price') {
            return $value;
        }

        foreach (array_keys($value) as $key) {
            if ($this->direction == 'asc') {
                uasort($value[$key], function($a, $b) {
                    if ($a['value'] == $b['value']) return 0;
                    return ($a['value'] > $b['value']) ? +1 : -1;
                });
            } else {
                uasort($value[$key], function($a, $b) {
                    if ($a['value'] == $b['value']) return 0;
                    return ($a['value'] > $b['value']) ? -1 : +1;
                });
            }
        }
        return $value;
    }

}
