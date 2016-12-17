<?php $this->title = 'Register New User'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>


<form method="post" class="form-inline">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="username" class="form-control" placeholder="Enter UserName">
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="full_name" class="form-control" placeholder="Enter FullName">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input type="password" name="password" class="form-control"  placeholder="Password">
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input type="password" name="password_confirm" class="form-control"  placeholder="Confirm Password">
    </div>
    <div class="input-group">
        <select class="form-control" name="user_role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>
    <button style="align-content: center" type="submit" class="btn btn-default" value="Register">Register</button>
</form>








