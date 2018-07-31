<?php require "partials/header.view.php" ?>
    <div>
        <img class="index-image" src="<?= $models[3]->image ?>" alt="model display">
    </div>

    <div class="background">
        <h1 class="greeting">Welcome to Sculpture Tracker!</h1>
        <p class="intro-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Adipisci debitis deleniti dolores, numquam quaerat sunt.
            Accusantium at beatae eligendi labore rem.
            Aperiam culpa distinctio natus nesciunt tempora! Qui repellat, unde!
        </p>
    </div>
    <a href="/models" class="browse-button"><button>Browse Collection</button></a>
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
