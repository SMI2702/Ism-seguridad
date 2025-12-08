<?php

namespace App\Services;

class PriceCalculator
{
    public function calculateWithTax(float $precio, float $iva): float
    {
        if ($precio < 0) {
            return 0;
        }

        return $precio + ($precio * $iva);
    }
}
