<?php $this->title = 'Register New User'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>
<form method="post">
    <div>Username: <input type="text" name="username"  required/></div>
    <div>Password: <input type="password" name="password" required/></div>
    <div>Password Confim: <input type="password" name="password_confirm" required/></div>
    <div>Full Name: <input type="text" name="full_name" required/></div>
    <div>Role:
        <select name="user_role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>
    <div><input type="submit" value="Register"></div>
</form>
