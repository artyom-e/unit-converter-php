<?php

namespace ArtyomE\UnitConverter\Converters\Length;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Length\KilometersToMilesFormula;

class KilometersConverter extends BaseConverter
{
    public function toMiles(): float
    {
        return $this->resolveFormula(KilometersToMilesFormula::class);
    }
}
