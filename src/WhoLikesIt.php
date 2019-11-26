<?php

/**
 * @link https://www.codewars.com/kata/5266876b8f4bf2da9b000362
 */

namespace Saundefined\CodeWars;

class WhoLikesIt
{
    public static function solution(array $names): string
    {
        $output = [
            'no one likes this',
            sprintf('%s likes this', $names[0]),
            sprintf('%s and %s like this', $names[0], $names[1]),
            sprintf('%s, %s and %s like this', $names[0], $names[1], $names[2]),
            sprintf('%s, %s and ' . (count($names) - 2) . ' others like this', $names[0], $names[1]),
        ];

        return $output[min(4, count($names))];
    }
}
