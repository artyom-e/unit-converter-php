<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Formulas\Temperature;

use ArtyomE\UnitConverter\Formulas\FormulaInterface;

class RankineToCelsiusFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return round($value * 5 / 9 - 273.15, 8);
    }
}
