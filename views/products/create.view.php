<?php require "views/partials/header.view.php" ?>
<?php if(isset($product)): ?>
    <form action="/admin/products/update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product->id ?>">
<?php else: ?>
    <form action="/admin/products" method="POST" enctype="multipart/form-data">
<?php endif; ?>
    <div class="form-group">
        <label class="labels" for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= isset($product->title) ? $product->title : '' ?>">
    </div>

        <div class="form-group">
            <label class="labels" for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value=""></option>
            <?php foreach ($categories as $category): ?>
                <?php $selected = ($category->id === $product->category_id) ? "selected" : "" ?>
                <option value="<?= $category->id ?>" <?= $selected ?>><?= $category->title  ?></option>
            <?php endforeach; ?>
            </select>
        </div>

    <div class="form-group">
        <label class="labels" for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= isset($product->description) ? $product->description : '' ?></textarea>
    </div>

        <div class="form-group">
            <label class="labels" for="artist">Artist</label>
            <input type="text" name="artist" id="artist" class="form-control" value="<?= isset($product->artist) ? $product->artist : '' ?>">
        </div>

        <div class="form-group">
            <label class="labels" for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" value="<?= isset($product->price) ? $product->price : '' ?>">
        </div>

        <div class="form-group">
            <label class="labels" for="upvotes">Upvotes</label>
            <input type="number" name="upvotes" id="upvotes" class="form-control" value="<?= isset($product->upvotes) ? $product->upvotes : '' ?>">
        </div>

    <div class="form-group">
        <?php if (isset($product)) : ?>
            <div>
<!--                <img width="240" src="/storage/--><?//= $product->image ?><!--" alt="">-->
                <img width="240" src="<?= $product->image ?>" alt="">
            </div>
        <?php endif; ?>

        <label class="labels" for="image">Image</label>
        <input type="text" name="image" id="image" class="form-control" value="">
    </div>

    <button class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>

</form>
<?php require "views/partials/footer.view.php" ?>
