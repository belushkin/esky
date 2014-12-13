<?php

namespace esky\Filters;

class Filter implements FilterInterface
{

    protected $_filters = array();

    public function addFilter(FilterInterface $filter)
    {
        $this->_filters[] = $filter;
        return $this;
    }

    public function filter($value)
    {
        $valueFiltered = $value;
        foreach ($this->_filters as $filter) {
            $valueFiltered = $filter->filter($valueFiltered);
        }
        return $valueFiltered;
    }

}
