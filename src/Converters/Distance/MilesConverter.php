<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Distance;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Distance\MilesToKilometersFormula;

class MilesConverter extends BaseConverter
{
    public function toKilometers(): float
    {
        return $this->resolveFormula(MilesToKilometersFormula::class);
    }
}
