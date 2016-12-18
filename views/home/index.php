<?php $this->title = 'All posts'; ?>

<div id="wrapper">
    <aside class="sidebar" <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="0">
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

<div class="middle1">
    <!--ToDO: Pagination Function-->
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="disabled">
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="<?=APP_ROOT?>/home/view/10">1</a></li>
            <li><a href="<?=APP_ROOT?>/home/view/11">2</a></li>
            <li><a href="<?=APP_ROOT?>/home/view/12">3</a></li>
            <li><a href="<?=APP_ROOT?>/home/view/14">4</a></li>
            <li><a href="<?=APP_ROOT?>/home/view/17">5</a></li>
            <li class="disabled">
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

