<?php $this->title = 'Delete Post'; ?>
<div class="post-delete">
    <h1><?=htmlspecialchars($this->title)?></h1>

         <form method="post">
            <div class="form-group">
                <h4><span class="label label-info">Title to be deleted </span></h4>
                <input type="text" class="form-control" name="post_title" disabled value="<?=htmlspecialchars($this->post['title'])?>"/>
            </div>

             <div class="form-group">
                 <h4><span class="label label-info">Content of the post </span></h4>
                    <?=$this->post['content']?>
                    <br>
             </div>

             <div>
                <button type="submit" value="Delete" class="btn btn-primary">Delete </button>
                <button type="submit" value="Cancel" class="btn btn-primary"><a href="<?=htmlspecialchars(APP_ROOT)?>/posts">Cancel</a> </button>
            </div>
         </form>
</div>


