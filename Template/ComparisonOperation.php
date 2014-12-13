<?php

namespace esky\Template;

abstract class ComparisonOperation
{
    protected abstract function _getFirstNumber();
    protected abstract function _getSecondNumber();
    protected abstract function _operator($a, $b);

    public function getOperationResult()
    {
        $a = $this->_getFirstNumber();
        $b = $this->_getSecondNumber();
        return $this->_operator($a, $b);
    }
}