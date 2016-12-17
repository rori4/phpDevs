<?php $this->title = 'Login'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<form method="post" class="form-inline">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" class="form-control" placeholder="Enter username" />
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" class="form-control" placeholder="Enter password" />
    </div>
    <div><input type="submit" value="Login" class="btn btn-default"></div>
</form>