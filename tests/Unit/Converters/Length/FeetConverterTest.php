<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Converters\Length\FeetConverter;
use ArtyomE\UnitConverter\Formulas\Length\FeetToMetersFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new FeetConverter($this->value);
});

it('can convert to meters', function () {
    $result = $this->converter->toMeters();
    $formula = new FeetToMetersFormula();
    expect($result)->toBe($formula->apply($this->value));
});
