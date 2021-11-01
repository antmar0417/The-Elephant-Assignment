<?php require __DIR__ . '/header.php';
if (isset($_GET['model'])) {
    $renderCarModel = $_GET['model'];
}
?>
<main>
    <h1 class="site-title"><?= $siteTitle; ?></h1>
    <p>Välj bilmodell nedan.</p>
    <div class="four-column-wrapper">
        <?php foreach (array_unique(getCarModel($cars, $renderCarModel)) as $model) : ?>
            <p>
                <a href=""> <?= $model; ?> </a>
            </p>
        <?php endforeach; ?>
    </div>
    <h2>Bilar till salu</h2>
    <section class="cars">
        <?php foreach ($cars as $car) : ?>
            <?php if ($car['model'] === $renderCarModel) : ?>
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
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
</main>
<?php require __DIR__ . '/footer.php'; ?>
