<?php

declare(strict_types=1);

namespace ArtyomE\UnitConverter\Converters\Weight;

use ArtyomE\UnitConverter\Converters\BaseConverter;
use ArtyomE\UnitConverter\Formulas\Weight\KilogramsToPoundsFormula;

class KilogramsConverter extends BaseConverter
{
    public function toPounds(): float
    {
        return $this->resolveFormula(KilogramsToPoundsFormula::class);
    }
}
