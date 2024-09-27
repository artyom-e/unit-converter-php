<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Temperature;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Temperature\KelvinToCelsiusFormula;
use ArtyomE\UnitConverter\Formulas\Temperature\KelvinToFahrenheitFormula;

class KelvinConverter extends BaseConverter
{
    public function toCelsius(): float
    {
        return $this->resolveFormula(KelvinToCelsiusFormula::class);
    }

    public function toFahrenheit(): float
    {
        return $this->resolveFormula(KelvinToFahrenheitFormula::class);
    }
}
