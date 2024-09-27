<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Distance;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Distance\FeetToMetersFormula;

class FeetConverter extends BaseConverter
{
    public function toMeters(): float
    {
        return $this->resolveFormula(FeetToMetersFormula::class);
    }
}
