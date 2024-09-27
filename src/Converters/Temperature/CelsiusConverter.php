<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Temperature;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Temperature\CelsiusToFahrenheitFormula;
use ArtyomE\UnitConverter\Formulas\Temperature\CelsiusToKelvinFormula;

class CelsiusConverter extends BaseConverter
{
    public function toFahrenheit(): float
    {
        return $this->resolveFormula(CelsiusToFahrenheitFormula::class);
    }

    public function toKelvin(): float
    {
        return $this->resolveFormula(CelsiusToKelvinFormula::class);
    }
}
