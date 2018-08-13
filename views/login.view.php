<?php require "views/partials/header.view.php" ?>
<br>
<div class="card whitespace horizontal-align" style="margin-bottom: 3px">
    <br><br>
    <h1>Login</h1>
    <form action="/admin/validate" method="POST" class="login">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required name="email" id="email" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password" id="password" class="form-control" >
        </div>
        <button class="btn btn-primary">Login</button>
        <br><br>
        <div>Don't have an account? <a href="register">Register</a></div>
    </form>
</div>
<br>
<?php require "views/partials/footer.view.php" ?>
