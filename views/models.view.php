<?php require "partials/header.view.php" ?>

<h1>View Collection</h1>

<div class="row">
    <?php foreach ($models as $model):?>
    <div class="card col-md-4">
        <img class="card-img-top" src="<?= $model->image ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $model->title ?></h5>
            <p class="card-text"><?= $model->description ?></p>
            <a href="/models/<?= $model->id ?>" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php endforeach; ?>

</div>

<?php require "partials/footer.view.php" ?>
