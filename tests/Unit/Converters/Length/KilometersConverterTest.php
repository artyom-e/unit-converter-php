<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Converters\Length\KilometersConverter;
use ArtyomE\UnitConverter\Formulas\Length\KilometersToMilesFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new KilometersConverter($this->value);
});

it('can convert to miles', function () {
    $result = $this->converter->toMiles();
    $formula = new KilometersToMilesFormula();
    expect($result)->toBe($formula->apply($this->value));
});
