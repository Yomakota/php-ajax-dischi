<?php include __DIR__ . '/../database.php' ?>

<?php foreach ($database as $album) { ?>
    <div class="col">
        <div class="album-card h-100 p-3">
            <img class="w-100" src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>">
            <div class="title text-light text-center text-uppercase fw-bold py-2"><?= $album['title'] ?></div>
            <div class="subtitle text-center"><?= $album['author'] ?></div>
            <div class="date text-center"><?= $album['year'] ?></div>
        </div>
    </div>
<?php } ?>