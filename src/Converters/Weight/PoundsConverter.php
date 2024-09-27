<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Weight;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Weight\PoundsToKilogramsFormula;

class PoundsConverter extends BaseConverter
{
    public function toKilograms(): float
    {
        return $this->resolveFormula(PoundsToKilogramsFormula::class);
    }
}
