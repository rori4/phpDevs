<?php $this->title = 'Create New Post'; ?>
<div class="middle1">
    <h1><?=htmlspecialchars($this->title)?></h1>

    <form method="post" >
        <div><b>Title:</b></div>
        <input type="text" name="post_title" class="form-control" disabled value="<?=htmlspecialchars($this->post['title'])?>"/>
        <div><b>Content:</b></div>
        <p><?=$this->post['content']?></p>
        <div><input type="submit" value="Delete" class="btn btn-primary" />
            <button type="submit" value="Cancel" class="btn btn-primary"><a href="<?=APP_ROOT?>/posts">Cancel</a></button></div>
    </form>
</div>

