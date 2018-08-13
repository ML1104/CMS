<?php require "views/partials/header.view.php" ?>
<a href="/admin/products" class="btn btn-primary">< Back to all</a>
<div class="show-item">
    <div class="form-group">
        <p>ID</p>
        <h3><?= $product->id ?></h3>
    </div>

    <div class="form-group">
        <p>Title</p>
        <h3><?= $product->title ?></h3>
    </div>

    <div class="form-group">
        <p>Description</p>
        <h3><?= $product->description ?></h3>
    </div>

    <div class="form-group">
        <p>Artist</p>
        <h3><?= $product->artist ?></h3>
    </div>

    <div class="form-group">
        <p>Age</p>
        <h3><?= $product->age ?></h3>
    </div>

    <div class="form-group">
        <p>Price</p>
        <h3><?= $product->price ?>$</h3>
    </div>

    <div class="form-group">
        <p>Upvotes</p>
        <h3><?= $product->upvotes ?></h3>
    </div>

    <div class="form-group">
        <p>Image</p>
        <img src="<?= $product->image ?>" alt="" style="max-width: 500px">
    </div>
</div>
<?php require "views/partials/footer.view.php" ?>
