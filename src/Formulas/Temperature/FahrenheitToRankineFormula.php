<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Formulas\Temperature;

use ArtyomE\UnitConverter\Formulas\FormulaInterface;

class FahrenheitToRankineFormula implements FormulaInterface
{
    public function apply(float $value): float
    {
        return $value + 459.67;
    }
}
