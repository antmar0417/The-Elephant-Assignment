<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>
<?php require __DIR__ . '/data.php'; ?>
<?php
$renderCarBrand = $_GET['make'];
?>
<main>
    <h1 class="site-title"><?php echo $siteTitle; ?></h1>
    <p>Välj bilmodell nedan.</p>
    <div class="four-column-wrapper">
        <?php foreach (array_unique(getCarModel($cars, $renderCarBrand)) as $model) : ?>

            <p>
                <a href="cars.php?model=<?php echo $model ?>"> <?php echo $model; ?> </a>
            </p>

        <?php endforeach; ?>
    </div>
    <h2>Bilar till salu</h2>
    <section class="cars">
        <?php foreach ($cars as $car) : ?>
            <?php if ($car['make'] === $renderCarBrand) : ?>
                <div class="car">
                    <div class="two-column-wrapper" onclick="location.href='https://www.blocket.se/annons/kalmar/ford_focus_kombi_1_8_flexifuel_trend_125hk/98144546'">
                        <div class="image-wrapper">
                            <img src="<?php echo $car['image'] ?>" alt="<?php echo $car['make'] . $car['model'] ?>" />
                        </div>
                        <div>
                            <ul>
                                <li><?php echo $car['make'] . " " . $car['model'] ?></li>
                                <li>Färg: <?php echo $car['color'] ?></li>
                                <li>Hästkrafter: <?php echo kwToHorsepower($car['kw']); ?></li>
                            </ul>
                            <p class="price">Pris: <?php echo $car['price'] ?> kr</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
</main>
<?php require __DIR__ . '/footer.php'; ?>
