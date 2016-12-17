<?php $this->title = 'Users'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Full Name</th>
    </tr>
    <?php foreach ($this->users as $user) : ?>
        <tr>
            <td><?=$user['id']?></td>
            <td><?=htmlspecialchars($user['username']) ?></td>
            <td><?=htmlspecialchars($user['full_name']) ?></td>
            <?php if ($_SESSION['user_role']=="adming"):?>
            <?php endif; ?>
        </tr>
    <?php endforeach ?>
</table>
