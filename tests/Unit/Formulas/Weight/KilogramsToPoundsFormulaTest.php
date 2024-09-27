<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Weight\KilogramsToPoundsFormula;

it('can convert kilograms to pounds', function () {
    $formula = new KilogramsToPoundsFormula();
    expect($formula->apply(10))->toBe(22.0462);
});
