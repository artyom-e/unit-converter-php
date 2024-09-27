<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Distance\KilometersToMilesFormula;

it('can convert kilometers to miles', function () {
    $formula = new KilometersToMilesFormula();
    expect($formula->apply(10))->toBe(6.2137);
});
