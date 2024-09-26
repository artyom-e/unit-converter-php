<?php

namespace ArtyomE\UnitConverter\Converters\Temperature;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Temperature\CelsiusToFahrenheitFormula;

class CelsiusConverter extends BaseConverter
{
    public function toFahrenheit(): float
    {
        return $this->resolveFormula(CelsiusToFahrenheitFormula::class);
    }
}
