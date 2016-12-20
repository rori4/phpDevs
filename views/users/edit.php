<?php $this->title = 'Edit User'; ?>

<div class="user-edit">
    <h1><?=htmlspecialchars($this->title)?></h1>
    <form method="post">
        <div  class="form-group">
            <h4><span class="label label-info">Username </span></h4>
                 <input type="text"  class="form" name="username" value="<?=htmlspecialchars($this->user['username'])?>" /><br>
            <h4><span class="label label-info">Full Name </span></h4>
                 <input type="text" class="form" name="full_name" value="<?=htmlspecialchars($this->user['full_name'])?>" /><br>
            <h4><span class="label label-info">Role </span></h4>
                 <select name="user_role">
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                 </select><br><br>
        <input type="text" name="user_id" value="<?=htmlspecialchars($this->user['id'])?>" hidden />
        <div>
            <button type="submit" value="Edit" class="btn btn-primary">Edit </button>
            <button type="submit" value="Back" class="btn btn-primary"><a href="<?=APP_ROOT?>/users">Back</a></button>
        </div>
        </div>
    </form>
</div>