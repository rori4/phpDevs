<?php $this->title = 'Welcome to My Blog'; ?>
<div id="wrapper">
    <aside class="sidebar">
        <h2>Recent Posts</h2>
        <?php foreach ($this->postsSidebar as $post): ?>
            <a href="<?=APP_ROOT?>/home/view/<?=$post['id']?>"><?=htmlspecialchars($post['title'])?></a><br>
        <?php endforeach   ?>
    </aside>


    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <nav class="col-sm-3">-->
    <!--            <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">-->
    <!--                <li class="active"><a href="#section1">Section 1</a></li>-->
    <!--                <li><a href="#section2">Section 2</a></li>-->
    <!--                <li><a href="#section3">Section 3</a></li>-->
    <!--            </ul>-->
    <!--        </nav>-->
    <!--        </div>-->
    <!--    </div>-->

    <main class="middle">
        <h1><?=htmlspecialchars($this->title)?></h1>

        <?php foreach ($this->posts as $post): ?>

            <h1><?=htmlspecialchars($post['title'])?></h1>
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

