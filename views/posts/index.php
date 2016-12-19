<h1><?=htmlspecialchars($this->title)?></h1>

<div class="middle">
    <?php if (!empty($this->posts)) : ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Author</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->posts as $post): ?>
                    <tr>
                        <td><?=htmlspecialchars($post['id'])?></td>
                        <td><?=htmlspecialchars($post['title'])?></td>
                        <td><?=cutLongText($post['content'])?></td>
                        <td><?=htmlspecialchars($post['date'])?></td>
                        <td><?=htmlspecialchars($post['full_name'])?></td>
                        <td>
                            <div>
                                <button type="button" class="btn btn-primary"><a href="<?=APP_ROOT?>/posts/edit/<?=htmlspecialchars($post['id'])?>">Edit</a></button>
                            </div>
                        </td>
                        <td>
                            <div>
                                <button type="button" class="btn btn-primary"><a href="<?=APP_ROOT?>/posts/delete/<?=htmlspecialchars($post['id'])?>">Delete</a></button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    <?php else: ?>
        <div class="middle1">
            <button type="submit" class="btn btn-primary" value="create"><a href="<?=APP_ROOT?>/posts/create">Create new post</a></button>
        </div>
    <?php endif; ?>

</div>

