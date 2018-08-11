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
        <a href="/models" class="browse-button"><button>Browse Collection</button></a>
    </div>

<?php require "partials/footer.view.php" ?>
