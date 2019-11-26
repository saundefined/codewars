<?php

namespace Saundefined\CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use Saundefined\CodeWars\CamelCaseMethod;

class CamelCaseMethodTest extends TestCase
{
    /** @test */
    public function it_should_be_valid(): void
    {
        $this->assertEquals('TestCase', CamelCaseMethod::solution('test case'));
        $this->assertEquals('CamelCaseMethod', CamelCaseMethod::solution('camel case method'));
        $this->assertEquals('SayHello', CamelCaseMethod::solution('say hello '));
        $this->assertEquals('CamelCaseWord', CamelCaseMethod::solution(' camel case word'));
        $this->assertEquals('', CamelCaseMethod::solution(''));
    }
}
