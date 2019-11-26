<?php

namespace Saundefined\CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use Saundefined\CodeWars\MultiplesOf3Or5;

class MultiplesOf3Or5Test extends TestCase
{
    /** @test */
    public function it_should_be_valid(): void
    {
        $this->assertEquals(23, MultiplesOf3Or5::solution(10));
    }
}
