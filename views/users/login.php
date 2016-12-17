<?php $this->title = 'Login'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>


<form method="post" class="form-inline">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="username" class="form-control" placeholder="Enter username">
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input type="password" name="password" class="form-control"  placeholder="Password">
    </div>
    <button type="submit" value="Login" class="btn btn-default">Login</button>
</form>
