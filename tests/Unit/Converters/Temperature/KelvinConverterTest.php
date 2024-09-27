<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Converters\Temperature\KelvinConverter;
use ArtyomE\UnitConverter\Formulas\Temperature\KelvinToCelsiusFormula;
use ArtyomE\UnitConverter\Formulas\Temperature\KelvinToFahrenheitFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new KelvinConverter($this->value);
});

it('can convert to celsius', function () {
    $result = $this->converter->toCelsius();
    $formula = new KelvinToCelsiusFormula();
    expect($result)->toBe($formula->apply($this->value));
});

it('can convert to kelvin', function () {
    $result = $this->converter->toFahrenheit();
    $formula = new KelvinToFahrenheitFormula();
    expect($result)->toBe($formula->apply($this->value));
});
