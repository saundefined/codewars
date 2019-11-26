<?php

namespace Saundefined\CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use Saundefined\CodeWars\SortAndStar;

class SortAndStarTest extends TestCase
{
    /** @test */
    public function it_should_be_valid(): void
    {
        $this->assertEquals('b***i***t***c***o***i***n',
            SortAndStar::solution(['bitcoin', 'take', 'over', 'the', 'world', 'maybe', 'who', 'knows', 'perhaps']));
        $this->assertEquals('a***r***e', SortAndStar::solution([
            'turns',
            'out',
            'random',
            'test',
            'cases',
            'are',
            'easier',
            'than',
            'writing',
            'out',
            'basic',
            'ones'
        ]));
        $this->assertEquals('a***b***o***u***t',
            SortAndStar::solution(['lets', 'talk', 'about', 'javascript', 'the', 'best', 'language']));
        $this->assertEquals('c***o***d***e',
            SortAndStar::solution(['i', 'want', 'to', 'travel', 'the', 'world', 'writing', 'code', 'one', 'day']));
        $this->assertEquals('L***e***t***s',
            SortAndStar::solution(['Lets', 'all', 'go', 'on', 'holiday', 'somewhere', 'very', 'cold']));
    }
}
