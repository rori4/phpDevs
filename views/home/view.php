<?php $this->title = $this->post['title']?>
<!--TODO: back button-->
<main class="middle">
    <h1><?=htmlspecialchars($this->title)?></h1>
    <p>
        <i>Posted on</i>
        <?=htmlspecialchars($this->post['date'])?>
        <i>by</i>
        <?=htmlspecialchars($this->post['full_name'])?>
    </p>
    <p><?=$this->post['content']?></p>

<!--    TODO: render comments-->
    <form method="post">
        <p>
            <i>Comment as</i>
            <b><?=htmlspecialchars($_SESSION['username'])?></b>
        </p>
        <textarea name="post_comment" class="textwrapper"  rows="3"></textarea>
        <div align="right">
            <button type="button" class="btn btn-primary">Comment</button>
        </div>
    </form>
</main>

