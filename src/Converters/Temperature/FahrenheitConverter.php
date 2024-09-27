<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Temperature;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Temperature\FahrenheitToCelsiusFormula;
use ArtyomE\UnitConverter\Formulas\Temperature\FahrenheitToKelvinFormula;

class FahrenheitConverter extends BaseConverter
{
    public function toCelsius(): float
    {
        return $this->resolveFormula(FahrenheitToCelsiusFormula::class);
    }

    public function toKelvin(): float
    {
        return $this->resolveFormula(FahrenheitToKelvinFormula::class);
    }
}
