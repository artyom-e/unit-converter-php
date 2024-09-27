<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Converters\Weight\KilogramsConverter;
use ArtyomE\UnitConverter\Formulas\Weight\KilogramsToPoundsFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new KilogramsConverter($this->value);
});

it('can convert to pounds', function () {
    $result = $this->converter->toPounds();
    $formula = new KilogramsToPoundsFormula();
    expect($result)->toBe($formula->apply($this->value));
});
