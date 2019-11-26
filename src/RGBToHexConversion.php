<?php

/**
 * @link https://www.codewars.com/kata/rgb-to-hex-conversion/
 */

namespace Saundefined\CodeWars;

class RGBToHexConversion
{
    public static function solution(int $r, int $g, int $b): string
    {
        return strtoupper(implode(array_map(static function ($item) {
            $item = min(255, max(0, $item));

            return str_pad(dechex($item), 2, 0, STR_PAD_LEFT);
        }, [$r, $g, $b])));
    }
}
