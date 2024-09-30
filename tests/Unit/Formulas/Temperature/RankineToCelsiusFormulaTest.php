<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Temperature\RankineToCelsiusFormula;

it('can convert rankine to celsius', function () {
    $formula = new RankineToCelsiusFormula();
    expect($formula->apply(10))->toBe(-267.59444444);
});
