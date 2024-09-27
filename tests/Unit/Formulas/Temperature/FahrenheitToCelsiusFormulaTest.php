<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Temperature\FahrenheitToCelsiusFormula;

it('can convert fahrenheit to celsius', function () {
    $formula = new FahrenheitToCelsiusFormula();
    expect($formula->apply(10))->toBe(-12.22222222);
});
