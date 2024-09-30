<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Formulas\Temperature;

use ArtyomE\UnitConverter\Formulas\FormulaInterface;

class CelsiusToRankineFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return round(($value + 273.15) * 9 / 5, 8);
    }
}
