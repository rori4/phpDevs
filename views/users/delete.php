<div class="middle">
    <?php $this->title = 'Delete User'; ?>
    <h1 style="text-align: center"><?=htmlspecialchars($this->title)?></h1>
<h2>Are you sure you want to delete <?=htmlspecialchars($this->user['username'])?> with role of <?=htmlspecialchars($this->user['user_role'])?>?</h2>
<form method="post">
    <div class="middle1"><input type="submit" value="Edit" class="btn btn-primary" />
        <button type="submit" value="Cancel" class="btn btn-primary"><a href="<?=APP_ROOT?>/posts">Cancel</a></button>
    </div>

</form>
</div>