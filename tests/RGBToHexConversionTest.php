<?php

namespace Saundefined\CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use Saundefined\CodeWars\RGBToHexConversion;

class RGBToHexConversionTest extends TestCase
{
    /** @test */
    public function it_should_be_valid(): void
    {
        $this->assertEquals('FFFFFF', RGBToHexConversion::solution(255, 255, 255));
        $this->assertEquals('FFFFFF', RGBToHexConversion::solution(255, 255, 300));
        $this->assertEquals('000000', RGBToHexConversion::solution(0, 0, 0));
        $this->assertEquals('000000', RGBToHexConversion::solution(-500, 0, 0));
        $this->assertEquals('9400D3', RGBToHexConversion::solution(148, 0, 211));
    }
}
