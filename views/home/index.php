<?php $this->title = 'Welcome to My Blog'; ?>

<div id="wrapper">
    <aside class="sidebar" <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <h3><font color="#eee">Recent Posts</font></h3>
        <?php foreach ($this->postsSidebar as $post): ?>

            <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?=htmlspecialchars($post['title'])?></a></ul>
            <br>
        <?php endforeach   ?>
    </aside>

    <main class="middle">
        <h1><?=htmlspecialchars($this->title)?></h1>

        <?php foreach ($this->posts as $post): ?>

            <h1><a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?=htmlspecialchars($post['title'])?></a></h1>
            <p>
                <i>Posted on</i>
                <?=htmlspecialchars($post['date'])?>
                <i>by</i>
                <?=htmlspecialchars($post['full_name'])?>
            </p>
            <p><?=$post['content']?></p>
        <?php endforeach   ?>
    </main>
</div>

