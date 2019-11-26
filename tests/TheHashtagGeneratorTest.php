<?php

namespace Saundefined\CodeWars\Tests;

use PHPUnit\Framework\TestCase;
use Saundefined\CodeWars\TheHashtagGenerator;

class TheHashtagGeneratorTest extends TestCase
{
    /** @test */
    public function it_should_be_valid(): void
    {
        $this->assertEquals(false, TheHashtagGenerator::solution(''), 'Expected an empty string to return false');
        $this->assertEquals(false, TheHashtagGenerator::solution(str_repeat(' ', 200)), 'Still an empty string');
        $this->assertEquals('#Codewars', TheHashtagGenerator::solution('Codewars'),
            'Should handle a single word and add a hashtag at the beginning.');
        $this->assertEquals('#Codewars', TheHashtagGenerator::solution('Codewars      '),
            'Should handle trailing whitespace.');
        $this->assertEquals('#CodewarsIsNice', TheHashtagGenerator::solution('Codewars Is Nice'),
            'Should remove spaces.');
        $this->assertEquals('#CodewarsIsNice', TheHashtagGenerator::solution('codewars is nice'),
            'Should capitalize first letters of words.');
        $this->assertEquals('#CodeWars', TheHashtagGenerator::solution('Code' . str_repeat(' ', 140) . 'wars'));
        $this->assertEquals(false,
            TheHashtagGenerator::solution('Looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong Cat'),
            'Should return false if the final word is longer than 140 chars.');
        $this->assertEquals('#A' . str_repeat('a', 138), TheHashtagGenerator::solution(str_repeat('a', 139)),
            'Should work');
        $this->assertEquals(false, TheHashtagGenerator::solution(str_repeat('a', 140)), 'Too long');
        $this->assertEquals('#HelloThereThanksForTryingMyKata',
            TheHashtagGenerator::solution(' Hello there thanks for trying my Kata'));
        $this->assertEquals('#HelloWorld', TheHashtagGenerator::solution('    Hello     World   '));
    }
}
