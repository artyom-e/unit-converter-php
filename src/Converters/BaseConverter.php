<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters;

use ArtyomE\UnitConverter\Formulas\FormulaInterface;

class BaseConverter
{
    public function __construct(protected float $value) {}

    /**
     * @param class-string $class
     */
    protected function resolveFormula(string $class): float
    {
        $formula = new $class();
        if (!($formula instanceof FormulaInterface)) {
            throw new \InvalidArgumentException('Formula must be an instance of FormulaInterface');
        }

        return $formula->apply($this->value);
    }
}
