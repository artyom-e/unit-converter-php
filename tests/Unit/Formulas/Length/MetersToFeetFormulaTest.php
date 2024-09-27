<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Length\MetersToFeetFormula;

it('can convert meters to feet', function () {
    $formula = new MetersToFeetFormula();
    expect($formula->apply(10))->toBe(32.8084);
});
