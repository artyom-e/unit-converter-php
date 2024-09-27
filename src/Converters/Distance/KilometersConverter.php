<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Distance;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Distance\KilometersToMilesFormula;

class KilometersConverter extends BaseConverter
{
    public function toMiles(): float
    {
        return $this->resolveFormula(KilometersToMilesFormula::class);
    }
}
