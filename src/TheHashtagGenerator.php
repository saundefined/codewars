<?php

/**
 * @link https://www.codewars.com/kata/the-hashtag-generator/
 */

namespace Saundefined\CodeWars;

class TheHashtagGenerator
{
    public static function solution(string $s): string
    {
        $hashTag = str_replace(' ', '', ucwords($s));
        if (!$hashTag || (strlen($hashTag) >= 140)) {
            return false;
        }

        return '#' . $hashTag;
    }
}
