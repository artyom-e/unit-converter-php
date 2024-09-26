<?php

namespace ArtyomE\UnitConverter\Formulas\Length;

use ArtyomE\UnitConverter\Formulas\FormulaInterface;

class KilometersToMilesFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return $value * 0.62137;
    }
}
