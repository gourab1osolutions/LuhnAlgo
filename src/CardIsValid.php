<?php

namespace Luhn;

class CardIsValid
{
    /**
     * @param string $cardNumber
     * @return bool
     */

    public function isValidCard(string $cardNumber): bool
    {

           $sum = 0;
           $doubleDigit = false;
        for ($j = strlen($cardNumber) - 1; $j >= 0; $j--) {
            $temp = $cardNumber[$j];
            if ($doubleDigit === true) {
                $temp *= 2;
                $temp = $temp > 9 ? $temp - 9 : $temp;
                $doubleDigit = false;
            } else {
                $doubleDigit = true;
            }
            $sum += $temp;

        return $sum % 10 == 0;
    }
}

}