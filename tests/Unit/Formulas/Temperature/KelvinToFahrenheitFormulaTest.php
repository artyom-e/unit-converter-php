<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Temperature\KelvinToFahrenheitFormula;

it('can convert kelvin to fahrenheit', function () {
    $formula = new KelvinToFahrenheitFormula();
    expect($formula->apply(10))->toBe(-441.67);
});
