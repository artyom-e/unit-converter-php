<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Converters\Length\MetersConverter;
use ArtyomE\UnitConverter\Formulas\Length\MetersToFeetFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new MetersConverter($this->value);
});

it('can convert to feet', function () {
    $result = $this->converter->toFeet();
    $formula = new MetersToFeetFormula();
    expect($result)->toBe($formula->apply($this->value));
});
