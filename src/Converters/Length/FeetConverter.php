<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Length;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Length\FeetToMetersFormula;

class FeetConverter extends BaseConverter
{
    public function toMeters(): float
    {
        return $this->resolveFormula(FeetToMetersFormula::class);
    }
}
