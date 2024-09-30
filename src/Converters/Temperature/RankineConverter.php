<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Temperature;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Temperature\RankineToCelsiusFormula;
use ArtyomE\UnitConverter\Formulas\Temperature\RankineToFahrenheitFormula;
use ArtyomE\UnitConverter\Formulas\Temperature\RankineToKelvinFormula;

class RankineConverter extends BaseConverter
{
    public function toCelsius(): float
    {
        return $this->resolveFormula(RankineToCelsiusFormula::class);
    }

    public function toFahrenheit(): float
    {
        return $this->resolveFormula(RankineToFahrenheitFormula::class);
    }

    public function toKelvin(): float
    {
        return $this->resolveFormula(RankineToKelvinFormula::class);
    }
}
