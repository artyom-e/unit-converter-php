<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Converters\Temperature\FahrenheitConverter;
use ArtyomE\UnitConverter\Formulas\Temperature\FahrenheitToCelsiusFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new FahrenheitConverter($this->value);
});

it('can convert to celsius', function () {
    $result = $this->converter->toCelsius();
    $formula = new FahrenheitToCelsiusFormula();
    expect($result)->toBe($formula->apply($this->value));
});
