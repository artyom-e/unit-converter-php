<?php

declare(strict_types=1);

use ArtyomE\UnitConverter\Formulas\Temperature\RankineToFahrenheitFormula;

it('can convert rankine to fahrenheit', function () {
    $formula = new RankineToFahrenheitFormula();
    expect($formula->apply(10))->toBe(-449.67);
});
