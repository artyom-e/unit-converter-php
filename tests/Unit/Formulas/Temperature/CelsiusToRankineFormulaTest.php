<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Temperature\CelsiusToRankineFormula;

it('can convert celsius to rankine', function () {
    $formula = new CelsiusToRankineFormula();
    expect($formula->apply(10))->toBe(509.67);
});
