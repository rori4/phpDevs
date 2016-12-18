<?php $this->title = $this->post['title']?>

<main class="middle">
    <h1><?=htmlspecialchars($this->title)?></h1>
    <p>
        <i>Posted on</i>
        <?=htmlspecialchars($this->post['date'])?>
        <i>by</i>
        <?=htmlspecialchars($this->post['full_name'])?>
    </p>
    <p><?=$this->post['content']?></p>
</main>
