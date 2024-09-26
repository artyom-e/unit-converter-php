<?php

namespace ArtyomE\UnitConverter\Formulas\Weight;

use ArtyomE\UnitConverter\Formulas\FormulaInterface;

class KilogramsToPoundsFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return $value * 2.20462;
    }
}
