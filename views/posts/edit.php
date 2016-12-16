<?php $this->title = 'Edit Existing Post'; ?>
<h1><?=htmlspecialchars($this->title)?></h1>

<form method="post">
    <div>Title:</div>
    <input type="text" name="post_title" value="<?=htmlspecialchars($this->post['title'])?>" />
    <div>Content:</div>
    <textarea id="textarea" name="post_content" rows="10"><?=htmlspecialchars($this->post['content'])?></textarea>
    <div>Date (yyyy-MM-dd hh:mm:ss):</div>
    <input type="text" name="post_date" value="<?=htmlspecialchars($this->post['date'])?>" />


    <!-- //TODO: edit author id only if admin    -->
    <?php if ($_SESSION['user_role']=="admin"): ?>
        <div>Author:</div>
        <select name="post_author">
            <?php foreach ($this->authors as $author) : ?>
            <option value="<?=$author['id']?>"><?=htmlspecialchars($author['username'])?></option>
            <?php endforeach; ?>
        </select>
    <?php else: ?>
        <input name="post_author" value="<?=$_SESSION['user_id']?>" hidden />
    <?php endif; ?>
    <div><input type="submit" value="Edit"></div>
</form>
