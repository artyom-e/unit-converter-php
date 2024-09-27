<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Formulas\Distance;

use ArtyomE\UnitConverter\Formulas\FormulaInterface;

class KilometersToMilesFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return round($value * 0.62137, 8);
    }
}
