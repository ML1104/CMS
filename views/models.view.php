<?php require "partials/header.view.php" ?>

<h1 class="greeting">View Collection</h1>

<div class="row">
    <?php foreach ($models as $model):?>
    <div class="card col-md-4">
        <img class="card-img-top" src="<?= $model->image ?>" alt="Card image cap">
        <div class="card-body">
            <div class="centered">
                <h5 class="card-title"><?= $model->title ?></h5>
                <strong><?= checkCategory($model->category_id)?></strong>
            </div>
            <div class="centered">
                <p class="card-text"><?= $model->description ?></p>
                <div><?= $model->upvotes?> Upvotes</div>
            </div>
            <p><?= $model->age ?></p>
            <div class="centered">
                <div>Artist: <i><?= $model->artist ?></i></div>
                <div>Price: <strong><?= $model->price ?>$</strong></div>
            </div>
            <a href="/models/<?= $model->id ?>" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php endforeach; ?>

</div>

<?php require "partials/footer.view.php" ?>
