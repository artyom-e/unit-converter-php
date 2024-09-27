<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Temperature\CelsiusToKelvinFormula;

it('can convert celsius to kelvin', function () {
    $formula = new CelsiusToKelvinFormula();
    expect($formula->apply(10))->toBe(283.15);
});
