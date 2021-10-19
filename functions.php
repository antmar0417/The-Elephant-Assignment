<?php

declare(strict_types=1);

function kwToHorsepower(float $power): float
{
    $power = floatval(number_format($power * 1.36, 1));
    return $power;
}
