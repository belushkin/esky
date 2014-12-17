<?php

namespace esky\Template;

class GreaterTest extends \PHPUnit_Framework_TestCase
{

    public function testOperationResult1()
    {
        $template   = TemplateFactory::create('>', 1, 2);
        assertThat($template->getOperationResult(), is(false));
    }

    public function testOperationResult2()
    {
        $template   = TemplateFactory::create('>', 2, 1);
        assertThat($template->getOperationResult(), is(true));
    }

}