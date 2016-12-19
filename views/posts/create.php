<?php $this->title = 'Create New Post'; ?>
<div class="post-create">
    <h1><?=htmlspecialchars($this->title)?></h1>
    <br>
    <form method="post">
        <div class="form-group">
            <label for="Title">Title: </label>
        <input type="text" class="form-control" name="post_title" />
        </div>
       <br>
        <textarea id="text_editor" name="post_content" rows="10"></textarea>
        <div><br><br>
            <button type="submit" value="Create" class="btn btn-primary">Create</button>
            <button type="submit" value="Cancel" name="cancel-button" class="btn btn-primary"><a href="<?=APP_ROOT?>/posts">Cancel</a></button>
        </div>
    </form>
</div>
