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
        // if ($brand['make'] !== 'Ford') {
        //     continue;
        // }
        $makes[] = $brand['make'];
    }
    asort($makes);
    return $makes;
}

// $makes = getCarBrand($cars);


// foreach (array_unique(getCarBrand($cars)) as $make) {
//     echo $make . "\n";
// }

// echo count($makes);
// var_dump(array_unique($makes));

function getCarModel(array $models): array
{
    $carModels = [];

    foreach ($models as $model) {
        $carModels[] = $model['model'];
    }
    asort($carModels);
    return $carModels;
}
// $carModels = getCarModel($cars);

// var_dump($carModels);
