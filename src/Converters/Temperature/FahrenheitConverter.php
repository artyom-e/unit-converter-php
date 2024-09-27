<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Temperature;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Temperature\FahrenheitToCelsiusFormula;

class FahrenheitConverter extends BaseConverter
{
    public function toCelsius(): float
    {
        return $this->resolveFormula(FahrenheitToCelsiusFormula::class);
    }
}
