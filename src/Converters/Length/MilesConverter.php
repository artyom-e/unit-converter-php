<?php

namespace ArtyomE\UnitConverter\Converters\Length;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Length\MilesToKilometersFormula;

class MilesConverter extends BaseConverter
{
    public function toKilometers(): float
    {
        return $this->resolveFormula(MilesToKilometersFormula::class);
    }
}
