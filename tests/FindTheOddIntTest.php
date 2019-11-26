<?php

namespace Saundefined\CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use Saundefined\CodeWars\FindTheOddInt;

class FindTheOddIntTest extends TestCase
{
    /** @test */
    public function it_should_be_valid(): void
    {
        $this->assertEquals(5, FindTheOddInt::solution([20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5]));
        $this->assertEquals(-1, FindTheOddInt::solution([1, 1, 2, -2, 5, 2, 4, 4, -1, -2, 5]));
        $this->assertEquals(5, FindTheOddInt::solution([20, 1, 1, 2, 2, 3, 3, 5, 5, 4, 20, 4, 5]));
        $this->assertEquals(10, FindTheOddInt::solution([10]));
        $this->assertEquals(10, FindTheOddInt::solution([1, 1, 1, 1, 1, 1, 10, 1, 1, 1, 1]));
    }
}
