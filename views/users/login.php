<div class="login-index">
    <?php $this->title = 'Login'; ?>

    <h1><?= htmlspecialchars($this->title) ?></h1>


    <form method="post" class="form-inline">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user logo-small"></i></span>
            <input type="text" name="username" class="form-control" placeholder="Enter username">
        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock logo-small"></i></span>
            <input type="password" name="password" class="form-control"  placeholder="Password">
        </div><br><br>
        <a href="<?=APP_ROOT?>/users/forgotten">Forgotten password</a>
        <br><br>
        <button type="submit" value="Login" class="btn btn-primary">Login</button>
    </form>
</div>