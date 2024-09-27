<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Temperature\CelsiusToFahrenheitFormula;

it('can convert celsius to fahrenheit', function () {
    $formula = new CelsiusToFahrenheitFormula();
    expect($formula->apply(10))->toBe(50.0);
});
