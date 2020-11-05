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
        $double = false;
        for ($j = strlen($cardNumber) - 1; $j >= 0; $j--) {
            $temp = $cardNumber[$j];
            if ($double === true) {
                $temp *= 2;
                $temp = ($temp > 9) ? $temp - 9 : $temp;
                $double = false;
            } else {
                $double = true;
            }
            $sum += $temp;
        }
        return $sum % 10 == 0;
    }
}
