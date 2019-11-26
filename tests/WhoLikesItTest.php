<?php

namespace Saundefined\CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use Saundefined\CodeWars\WhoLikesIt;

class WhoLikesItTest extends TestCase
{
    /** @test */
    public function it_should_be_valid(): void
    {
        $this->assertEquals('no one likes this', WhoLikesIt::solution([]));
        $this->assertEquals('Peter likes this', WhoLikesIt::solution(['Peter']));
        $this->assertEquals('Jacob and Alex like this', WhoLikesIt::solution(['Jacob', 'Alex']));
        $this->assertEquals('Max, John and Mark like this', WhoLikesIt::solution(['Max', 'John', 'Mark']));
        $this->assertEquals('Alex, Jacob and 2 others like this', WhoLikesIt::solution(['Alex', 'Jacob', 'Mark', 'Max']));
    }
}
