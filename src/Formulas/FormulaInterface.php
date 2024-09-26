<?php

namespace ArtyomE\UnitConverter\Formulas;

interface FormulaInterface
{
    public function apply(float $value): float;
}
