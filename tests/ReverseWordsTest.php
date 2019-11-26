<?php

namespace Saundefined\CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use Saundefined\CodeWars\ReverseWords;

class ReverseWordsTest extends TestCase
{
    /** @test */
    public function it_should_be_valid(): void
    {
        $this->assertEquals('ehT kciuq nworb xof spmuj revo eht yzal .god',
            ReverseWords::solution('The quick brown fox jumps over the lazy dog.'));
        $this->assertEquals('elppa', ReverseWords::solution('apple'));
        $this->assertEquals('a b c d', ReverseWords::solution('a b c d'));
        $this->assertEquals('elbuod  decaps  sdrow', ReverseWords::solution('double  spaced  words'));
        $this->assertEquals('desserts stressed', ReverseWords::solution('stressed desserts'));
        $this->assertEquals('olleh olleh', ReverseWords::solution('hello hello'));
    }
}
