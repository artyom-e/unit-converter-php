<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Length\FeetToMetersFormula;

it('can convert feet to meters', function () {
    $formula = new FeetToMetersFormula();
    expect($formula->apply(10))->toBe(3.048);
});
