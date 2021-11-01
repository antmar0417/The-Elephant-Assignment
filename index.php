<?php require __DIR__ . '/header.php'; ?>
<main>
    <h1 class="site-title"><?= $siteTitle; ?></h1>
    <p>Välj märke och bilmodell nedan.</p>
    <div class="four-column-wrapper">
        <?php foreach (array_unique(getCarBrand($cars)) as $make) : ?>
            <p>
                <a href="models.php?make=<?= $make ?>"> <?= $make; ?> </a>
            </p>
        <?php endforeach; ?>
    </div>
    <h2>Bilar till salu</h2>
    <section class="cars">
        <?php foreach ($cars as $car) : ?>
            <div class="car">
                <div class="two-column-wrapper" onclick="location.href='<?= $car['url']  ?>'">
                    <div class="image-wrapper">
                        <img src="<?= $car['image'] ?>" alt="<?= "Bilmärke: " . $car['make'] . "Modell: " .  $car['model'] ?>" />
                    </div>
                    <div>
                        <ul>
                            <li><?= $car['make'] . " " . $car['model'] ?></li>
                            <li>Mil: <?= $car['miles'] ?></li>
                            <li>Årsmodell: <?= $car['year'] ?></li>
                            <li>Hästkrafter: <?= kwToHorsepower($car['kw']); ?></li>
                        </ul>
                        <p class="price">Pris: <?= $car['price'] ?> kr</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>
<?php require __DIR__ . '/footer.php'; ?>
