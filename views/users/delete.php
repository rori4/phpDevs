<div class="users-del">
    <?php $this->title = 'Delete User'; ?>
    <h1 style="text-align: center"><?=htmlspecialchars($this->title)?></h1>
<h2>Are you sure you want to delete <?=htmlspecialchars($this->user['username'])?> with role of <?=htmlspecialchars($this->user['user_role'])?>?</h2>
<form method="post"><br>
    <div>
        <button type="submit" value="Delete" class="btn btn-primary">Delete </button>
        <button type="submit" value="Cancel" class="btn btn-primary"><a href="<?=APP_ROOT?>/users">Cancel</a></button>
    </div>

</form>
</div>