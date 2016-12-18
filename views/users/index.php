

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
                <button type="submit" value="Edit" class="btn btn-primary"><a href="<?=APP_ROOT?>/users/edit/<?=htmlspecialchars($user['id'])?>"><font color="#eee">Edit</font></a></button>
                <button type="submit" value="Delete" class="btn btn-primary"><a href="<?=APP_ROOT?>/users/delete/<?=htmlspecialchars($user['id'])?>"><font color="#eee">Delete</font></a></button>

            </td>
            <?php endif; ?>
        </tr>
        <?php endforeach ?>

        </tbody>
    </table>
</div>
