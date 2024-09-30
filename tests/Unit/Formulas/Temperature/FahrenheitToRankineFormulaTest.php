<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Temperature\FahrenheitToRankineFormula;

it('can convert fahrenheit to rankine', function () {
    $formula = new FahrenheitToRankineFormula();
    expect($formula->apply(10))->toBe(469.67);
});
