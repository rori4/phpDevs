<?php $this->title = 'Edit User'; ?>

<div class="middle">
    <h1><?=htmlspecialchars($this->title)?></h1>
    <form method="post">
        <div  class="form-group">
            <label for="Username">Username:</label>
                 <input type="text"  class="form" name="username" value="<?=htmlspecialchars($this->user['username'])?>" /><br>
            <label for="Full-Name">Full Name:</label>
                 <input type="text" class="form" name="full_name" value="<?=htmlspecialchars($this->user['full_name'])?>" /><br><br>
             <label for="Role">Role:</label>
                 <select name="user_role">
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                 </select><br><br>
        <input type="text" name="user_id" value="<?=htmlspecialchars($this->user['id'])?>" hidden />
        <div>
            <button type="submit" value="Edit" class="btn btn-primary">Edit: </button>
        </div>
        </div>
    </form>
</div>