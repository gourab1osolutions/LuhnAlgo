<?php

namespace Luhn;

use InvalidArgumentException;

/**
 * Class Luhn
 * @package Luhn
 */
class Luhn
{
    /**
     * @param int $prefix
     * @param int $length
     * @return string
     */
    public function cardGenerate(int $prefix = 4, int $length = 16): string
    {
        $prefixLength = strlen($prefix);
        if ($length <= 0) {
            throw new InvalidArgumentException("Length must be greater than 0");
        }
        $cardNumberArray = str_split($prefix, 1);
        for ($i = $prefixLength; $i <= $length - 2; $i++) {
            array_push($cardNumberArray, mt_rand(1, 9));
        }
        $sum = 0;
        $doubleDigit = true;
        for ($j = count($cardNumberArray) - 1; $j >= 0; $j--) {
            $temp = $cardNumberArray[$j];
            if ($doubleDigit === true) {
                $temp *= 2;
                $temp = $temp > 9 ? $temp - 9 : $temp;
                $doubleDigit = false;
            } else {
                $doubleDigit = true;
            }
            $sum += $temp;
        }
        $parity = (10 - ($sum % 10)) % 10;
        array_push($cardNumberArray, $parity);
        return implode("", $cardNumberArray);
    }
}
