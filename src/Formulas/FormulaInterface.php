<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Formulas;

interface FormulaInterface
{
    public function apply(float $value): float;
}
