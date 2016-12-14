<?php $this->title = 'Login'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<form method="post">
    //TODO: test ommit
    <div>Username: <input type="text" name="username" /></div>
    <div>Password: <input type="password" name="password" /></div>
    <div><input type="submit" value="Login"></div>
    //TODO: test the gitHub
</form>
