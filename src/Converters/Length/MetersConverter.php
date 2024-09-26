<?php

namespace ArtyomE\UnitConverter\Converters\Length;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Length\MetersToFeetFormula;

class MetersConverter extends BaseConverter
{
    public function toFeet(): float
    {
        return $this->resolveFormula(MetersToFeetFormula::class);
    }
}
