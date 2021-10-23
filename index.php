<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>
<main>
    <section>
        <h1 class="site-title">Cars.com</h1>
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
    </section>
    <h2>Bilar till salu</h2>
    <section class="cars">
        <?php foreach ($cars as $car) : ?>
            <div class="car">
                <div class="two-column-wrapper">
                    <div class="image-wrapper">
                        <img src="<?php echo $car['image'] ?>" alt="<?php echo $car['make'] . $car['model'] ?>" />
                    </div>
                    <ul>
                        <li><?php echo $car['make'] . " " . $car['model'] ?></li>
                        <li>Hästkrafter: <?php kwToHorsepower($car['kw']); ?></li>
                        <p class="price">Pris: <?php echo $car['price'] ?></p>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>
<?php require __DIR__ . '/footer.php'; ?>
