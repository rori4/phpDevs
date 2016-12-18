<?php $this->title = 'Create New Post'; ?>
<div class="middle">
    <h1><?=htmlspecialchars($this->title)?></h1>

    <form method="post">
        <div>Title:</div>
        <input type="text" name="post_title" />
        <div>Content:</div>
        <textarea id="text_editor" name="post_content" rows="10"></textarea>
        <div><br><br>
            <button type="submit" value="Create" class="btn btn-primary">Create</button>
            <button type="submit" value="Cancel" name="cancel-button" class="btn btn-primary"><a href="<?=APP_ROOT?>/posts">Cancel</a></button>
        </div>
    </form>
</div>
