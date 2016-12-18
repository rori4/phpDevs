

<h1><?=htmlspecialchars($this->title)?></h1>

<div class="container">
    <h2>Users</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Actions</th>
        </tr>
        </thead>
        <?php if ($_SESSION['user_role']=="admin"):?>

        <?php endif; ?>
        <tbody>
        <tr>
            <?php foreach ($this->users as $user) : ?>
            <td><?=$user['id']?></td>
            <td><?=htmlspecialchars($user['username']) ?></td>
            <td><?=htmlspecialchars($user['full_name']) ?></td>
            <?php if ($_SESSION['user_role']=="admin"):?>
            <td>
                <div>
                <button type="button" class="btn btn-primary"><a href="<?=APP_ROOT?>/users/edit/<?=htmlspecialchars($user['id'])?>">Edit</a></button>
                <button type="button" class="btn btn-primary"><a href="<?=APP_ROOT?>/users/delete/<?=htmlspecialchars($user['id'])?>">Delete</a></button>
                </div>
            </td>
            <?php endif; ?>
        </tr>
        <?php endforeach ?>

        </tbody>
    </table>
</div>
