<?php

namespace Saundefined\CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use Saundefined\CodeWars\FindTheMissingLetter;

class FindTheMissingLetterTest extends TestCase
{
    /** @test */
    public function it_should_be_valid(): void
    {
        $this->assertEquals('e', FindTheMissingLetter::solution(['a', 'b', 'c', 'd', 'f']));
        $this->assertEquals('P', FindTheMissingLetter::solution(['O', 'Q', 'R', 'S']));
    }
}
