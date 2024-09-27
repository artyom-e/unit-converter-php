<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Weight\PoundsToKilogramsFormula;

it('can convert pounds to kilograms', function () {
    $formula = new PoundsToKilogramsFormula();
    expect($formula->apply(10))->toBe(4.53592);
});
