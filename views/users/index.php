<?php $this->title = 'Users'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Full Name</th>
        <?php if ($_SESSION['user_role']=="admin"):?>
            <th>Actions</th>
        <?php endif; ?>
    </tr>
    <?php foreach ($this->users as $user) : ?>
        <tr>
            <td><?=$user['id']?></td>
            <td><?=htmlspecialchars($user['username']) ?></td>
            <td><?=htmlspecialchars($user['full_name']) ?></td>
            <?php if ($_SESSION['user_role']=="admin"):?>
                <td>
                    <a href="<?=APP_ROOT?>/users/edit/<?=htmlspecialchars($user['id'])?>">[Edit]</a>
                    <a href="<?=APP_ROOT?>/users/delete/<?=htmlspecialchars($user['id'])?>">[Delete]</a>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach ?>
</table>
