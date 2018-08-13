<?php require "views/partials/header.view.php" ?>
<br>
<div class="card whitespace horizontal-align" style="margin-bottom: 3px">
    <br><br>
    <h1>Register</h1>
    <form action="createuser" method="POST" class="login">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" required name="name" id="name" class="form-control" >
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" required name="lastname" id="lastname" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password" id="password" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required name="email" id="email" class="form-control" >
        </div>

        <button class="btn btn-primary">Register</button>
    </form>
</div>
<br>
<?php require "views/partials/footer.view.php" ?>
