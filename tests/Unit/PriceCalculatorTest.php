<?php

namespace Tests\Unit;

use App\Services\PriceCalculator;
use PHPUnit\Framework\TestCase;

class PriceCalculatorTest extends TestCase
{
    public function test_it_calculates_tax_correctly()
    {
        $calculator = new PriceCalculator;
        $result = $calculator->calculateWithTax(100, 0.16);
        $this->assertEquals(116, $result);
    }
}
