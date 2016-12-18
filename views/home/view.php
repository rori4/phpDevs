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
<!---->

        <?php foreach ($this->comment as $com): ?>
            <div class="">
                <div class="col-sm-2">
                    <div class="thumbnail">
                        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                    </div><!-- /thumbnail -->
                </div><!-- /col-sm-1 -->
                <div class="col-sm-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i>Posted by</i>
                            <b><?=htmlspecialchars($com['username'])?></b>
                            <i>on</i>
                            <b><?=htmlspecialchars($com['date'])?></b>
                        </div>

                        <div class="panel-body">
                            <p><?=$com['comments']?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


<!--    TODO: render comments-->
    <form method="post">
        <p>
            <i>Comment as</i>
            <b><?=htmlspecialchars($_SESSION['username'])?></b>
        </p>
        <textarea name="post_comment" class="textwrapper"  rows="3"></textarea>
        <input name="post_id" type="text" value="<?=$this->post['id']?>" hidden />
        <div align="right">
            <button type="submit" class="btn btn-primary">Comment</button>
        </div>
    </form>
</main>

