<?php require "partials/header.view.php" ?>
    <ul>
        <h3>Has votes</h3>
        <?php foreach ($models as $model): ?>
            <?php if ($model->hasVotes()): ?>
                <li><?= $model->description ?></li>
            <?php else: ?>
                <h3>No votes</h3>
                <li><?= $model->description ?></li>
            <?php endif; ?>
        <?php endforeach;?>
    </ul>


<form action="/task/add" class="form" method="post">
    <div class="form-group">
        <label for="description">Task</label>
        <input type="text" name="description" id="description">
    </div>

    <button>Submit</button>
</form>
<?php require "partials/footer.view.php" ?>
