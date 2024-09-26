<?php

namespace ArtyomE\UnitConverter\Formulas\Temperature;

use ArtyomE\UnitConverter\Formulas\FormulaInterface;

class FahrenheitToCelsiusFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return ($value - 32) * 5 / 9;
    }
}
