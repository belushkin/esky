<?php

namespace esky\Template;

class TemplateFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testGreaterThan()
    {
        assertThat(TemplateFactory::create('>',1,2), is(anInstanceOf('esky\Template\GreaterThan')));
    }

    public function testBlank()
    {
        assertThat(TemplateFactory::create('!-~',1,2), is(anInstanceOf('esky\Template\Blank')));
    }

    public function testEqual()
    {
        assertThat(TemplateFactory::create('=',1,2), is(anInstanceOf('esky\Template\Equal')));
    }

    public function testLessThan()
    {
        assertThat(TemplateFactory::create('<',1,2), is(anInstanceOf('esky\Template\LessThan')));
    }

}
