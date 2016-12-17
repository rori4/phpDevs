<?php $this->title = 'Delete User'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Username:</div>
    <input type="text" name="username" value="<?=htmlspecialchars($this->user['username'])?>" />
    <div>Full Name:</div>
    <input type="text" name="full_name" value="<?=htmlspecialchars($this->user['full_name'])?>" />
    <div>Role:</div>
    <select name="user_role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <input type="text" name="user_id" value="<?=htmlspecialchars($this->user['id'])?>" hidden />
    <div><input type="submit" value="Edit"></div>
</form>