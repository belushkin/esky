<?php

namespace esky\Filters;

class Name implements FilterInterface
{

    protected $matches = array();

    public function __construct($expression = null)
    {
        if (is_string($expression)) {
            preg_match_all('/(?P<field>[a-zA-Z0-9\s]+)(?P<type>[><=!]+)(?P<value>[a-zA-Z0-9\s]+)/', $expression, $this->matches);
        }
    }

    public function filter($value)
    {
        $result         = array();
        $field          = trim(current($this->matches['field']));
        $type           = trim(current($this->matches['type']));
        $fieldValue     = trim(current($this->matches['value']));

        if ($field != 'name') {
            return $value;
        }

        foreach ($value as $country => $money) {
            foreach ($money as $code => $description) {
                foreach ($description as $name => $v) {
                    if ($name != 'name') {
                        continue;
                    }
                    $template = \esky\Template\TemplateFactory::create($type, strtolower(trim($v)), strtolower($fieldValue));
                    if ($template->getOperationResult()) {
                        $result[$country][$code] = $description;
                    }
                }
            }
        }

        return $result;
    }


}
