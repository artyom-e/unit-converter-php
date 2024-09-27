<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Converters\Temperature\CelsiusConverter;
use ArtyomE\UnitConverter\Formulas\Temperature\CelsiusToFahrenheitFormula;
use ArtyomE\UnitConverter\Formulas\Temperature\CelsiusToKelvinFormula;

beforeEach(function () {
    $this->value = 10;
    $this->converter = new CelsiusConverter($this->value);
});

it('can convert to fahrenheit', function () {
    $result = $this->converter->toFahrenheit();
    $formula = new CelsiusToFahrenheitFormula();
    expect($result)->toBe($formula->apply($this->value));
});

it('can convert to kelvin', function () {
    $result = $this->converter->toKelvin();
    $formula = new CelsiusToKelvinFormula();
    expect($result)->toBe($formula->apply($this->value));
});
