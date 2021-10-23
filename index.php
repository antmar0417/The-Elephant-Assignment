<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>
<?php require __DIR__ . '/data.php'; ?>
<main>
    <h1 class="site-title"><?php echo $siteTitle; ?></h1>
    <p>Välj märke och bilmodell nedan.</p>
    <div class="four-column-wrapper">
        <p>
            <a href="https://en.wikipedia.org/wiki/Big_cat">Audi</a>&nbsp;(1st)
        </p>
        <p>
            <a href="https://en.wikipedia.org/wiki/Big_cat">Ford</a>&nbsp;(3st)
        </p>
        <p>
            <a href="https://en.wikipedia.org/wiki/Big_cat">Volvo</a>&nbsp;(1st)
        </p>
        <p>
            <a href="https://en.wikipedia.org/wiki/Big_cat">Volkswagen</a>&nbsp;(1st)
        </p>
    </div>
    <h2>Bilar till salu</h2>
    <section class="cars">
        <?php foreach ($cars as $car) : ?>
            <div class="car">
                <div class="two-column-wrapper">
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
