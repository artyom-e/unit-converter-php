<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Formulas\Length;

use ArtyomE\UnitConverter\Formulas\FormulaInterface;

class FeetToMetersFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return $value * 0.3048;
    }
}
