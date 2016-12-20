<?php $this->title = 'Edit Existing Post'; ?>
<div class="post-edit">
    <h1><?=htmlspecialchars($this->title)?></h1>

    <form method="post">
        <div class="form-group">
            <label for="Title">Title: </label>
            <input type="text" class="form-control" value="<?=htmlspecialchars($this->post['title'])?> "/>
        </div>

        <label for="Content">Post content: </label>
        <textarea id="text_editor" name="post_content" rows="10"><?=htmlspecialchars($this->post['content'])?></textarea><br>
        <label for="Date">Date: </label>
               <div>Date (yyyy-MM-dd hh:mm:ss):</div>
               <input type="text" name="post_date" value="<?=htmlspecialchars($this->post['date'])?>" />
        <?php if ($_SESSION['user_role']=="admin"): ?>
            <br> <label for="Author">Author: </label><br>
            <select name="post_author">
                <?php foreach ($this->authors as $author) : ?>
                    <option value="<?=$author['id']?>"><?=htmlspecialchars($author['username'])?></option>
                <?php endforeach; ?>
            </select>
        <?php else: ?>
            <input name="post_author" value="<?=$_SESSION['user_id']?>" hidden />
        <?php endif; ?>
        <div><br>
            <button type="submit" value="Edit" class="btn btn-primary">Edit </button>
        </div>
    </form>
</div>

