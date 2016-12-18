<?php $this->title = 'Create New Post'; ?>
<div class="middle">
    <h1><?=htmlspecialchars($this->title)?></h1>

    <form method="post">
        <div>Title:</div>
        <input type="text" name="post_title" disabled value="<?=htmlspecialchars($this->post['title'])?>"/>
        <div>Content:</div>
        <p><?=$this->post['content']?></p>
        <div><input type="submit" value="Delete" />
            <a href="<?=APP_ROOT?>/posts">[Cancel]</a></div>
    </form>
</div>

