<?php $this->title = 'All posts - Page'; ?>

<div id="wrapper">
    <aside class="sidebar" <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="0">
        <h3><font color="#eee">Recent Posts</font></h3>
        <?php foreach ($this->postsSidebar as $post): ?>
            <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?=htmlspecialchars($post['title'])?></a></ul>
            <br>
        <?php endforeach   ?>
    </aside>
    <main class="home-index">
            <h1><?=htmlspecialchars($this->title)?></h1>
                 <?php foreach ($this->resultPosts as $post): ?>
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

<div class="paging">
    <nav aria-label="Page navigation">
        <ul class="pagination">

<!--            Removing the navigation buttons. Kind of useless when having only 2 pages-->

<!--            <li class="disabled">-->
<!--                <a href="#" aria-label="Previous">-->
<!--                    <span aria-hidden="true">&laquo;</span>-->
<!--                </a>-->
<!--            </li>-->
            <?php foreach ($this->pageNumbers as $page) : ?>
                <li><a href="<?=APP_ROOT?>/home/index/?page=<?=$page?>"><?=$page?></a></li>
            <?php endforeach; ?>
<!--            <li class="disabled">-->
<!--                <a href="#" aria-label="Next">-->
<!--                    <span aria-hidden="true">&raquo;</span>-->
<!--                </a>-->
<!--            </li>-->
        </ul>
    </nav>
</div>

