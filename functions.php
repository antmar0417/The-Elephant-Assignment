<?php

declare(strict_types=1);
// require __DIR__ . '/data.php';

function kwToHorsepower(float $power): float
{
    $power = floatval(number_format($power * 1.341, 1));
    return $power;
}

function getCarBrand(array $brands): array
{
    $makes = [];

    foreach ($brands as $brand) {
        $makes[] = $brand['make'];
    }
    asort($makes);
    return $makes;
}

function getCarModel(array $models, string $carBrand): array
{
    $carModels = [];

    foreach ($models as $model) {
        if ($model['make'] === $carBrand) {
            $carModels[] = $model['model'];
        }
    }
    asort($carModels);
    return $carModels;
}
