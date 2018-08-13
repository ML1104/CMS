<?php require "partials/header.view.php" ?>
    <div>
        <img class="index-image" src="<?= $models[3]->image ?>" alt="model display">
    </div>

    <div class="background">
        <h1 class="greeting">Welcome to Sculpture Tracker!</h1>
        <p class="intro-text">
            Sculpture Tracker is a website dedicated to showing you some of the newest sculptures out there in the world,
            waiting to be recognized.
            <br><br>
            Founded in 2018, it was designed to allow you to contribute to the sculpture market and upvote the sculptures you like to give them a chance
            to be sold.
        </p>
        <a href="/models" class="browse-button"><button>Browse Collection</button></a>
    </div>

<?php require "partials/footer.view.php" ?>
