<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>
<?php require __DIR__ . '/data.php'; ?>
<main>
    <h1 class="site-title"><?php echo $siteTitle; ?></h1>
    <p>Välj märke och bilmodell nedan.</p>
    <div class="four-column-wrapper">
        <?php foreach (array_unique(getCarBrand($cars)) as $make) : ?>
            <p>
                <a <?php if ($make === 'Audi') : ?> href="./audi.php" <?php elseif ($make === 'Ford') : ?> href="./ford.php" <?php endif; ?>><?php echo $make ?></a>&nbsp;(1st)
            </p>
        <?php endforeach; ?>
    </div>
    <h2>Bilar till salu</h2>
    <section class="cars">
        <?php foreach ($cars as $car) : ?>
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
        <?php endforeach; ?>
    </section>
</main>
<?php require __DIR__ . '/footer.php'; ?>
