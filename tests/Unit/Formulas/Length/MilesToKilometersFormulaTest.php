<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Length\MilesToKilometersFormula;

it('can convert miles to kilometers', function () {
    $formula = new MilesToKilometersFormula();
    expect($formula->apply(10))->toBe(16.0934);
});
