<?php $this->title = 'Delete User'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<h2>Are you sure you want to delete <?=htmlspecialchars($this->user['username'])?> with role of <?=htmlspecialchars($this->user['user_role'])?></h2>
<form method="post">
    <div><input type="submit" value="Edit" />
        <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
</form>