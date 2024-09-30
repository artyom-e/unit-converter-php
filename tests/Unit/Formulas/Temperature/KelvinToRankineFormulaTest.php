<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Temperature\KelvinToRankineFormula;

it('can convert kelvin to rankine', function () {
    $formula = new KelvinToRankineFormula();
    expect($formula->apply(10))->toBe(18.0);
});
