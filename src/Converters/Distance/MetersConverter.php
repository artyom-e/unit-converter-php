<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Distance;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Distance\MetersToFeetFormula;

class MetersConverter extends BaseConverter
{
    public function toFeet(): float
    {
        return $this->resolveFormula(MetersToFeetFormula::class);
    }
}
