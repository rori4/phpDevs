<?php $this->title = $this->post['title']?>

<h1><?=htmlspecialchars($this->title)?></h1>

<main>
    <p>
        <i>Posted on</i>
        <?=htmlspecialchars($this->post['date'])?>
        <i>by</i>
        <?=htmlspecialchars($this->post['full_name'])?>
    </p>
    <p><?=$this->post['content']?></p>
</main>
