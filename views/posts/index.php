<main>
    <table>
        <?php if (!empty($this->posts)) : ?>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
        <?php else: ?>
        <div><a href="<?=APP_ROOT?>/posts/create">[Create Your First Post]</a></div>
        <?php endif; ?>
    <?php foreach ($this->posts as $post): ?>
        <tr>
            <td><?=htmlspecialchars($post['id'])?></td>
            <td><?=htmlspecialchars($post['title'])?></td>
            <td><?=cutLongText($post['content'])?></td>
            <td><?=htmlspecialchars($post['date'])?></td>
            <td><?=htmlspecialchars($post['full_name'])?></td>
            <td>
                <a href="<?=APP_ROOT?>/posts/edit/<?=htmlspecialchars($post['id'])?>">[Edit]</a>
                <a href="<?=APP_ROOT?>/posts/delete/<?=htmlspecialchars($post['id'])?>">[Delete]</a>
            </td>
        </tr>
    <?php endforeach ?>
    </table>
</main>
