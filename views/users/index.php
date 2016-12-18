<h1><?=htmlspecialchars($this->title)?></h1>


    <div class="middle1">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Fullname</th>
                <?php if ($_SESSION['user_role']=="admin"):?>
                    <th>Edit</th>
                    <th>Delete</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($this->users as $user) : ?>
                    <tr>
                        <td><?=$user['id']?></td>
                        <td><?=htmlspecialchars($user['username']) ?></td>
                        <td><?=htmlspecialchars($user['full_name']) ?></td>
                        <?php if ($_SESSION['user_role']=="admin"):?>
                            <td>
                                <div>
                                    <button type="button" class="btn btn-primary"><a href="<?=APP_ROOT?>/users/edit/<?=htmlspecialchars($user['id'])?>">Edit</a></button>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <button type="button" class="btn btn-primary"><a href="<?=APP_ROOT?>/users/delete/<?=htmlspecialchars($user['id'])?>">Delete</a></button>
                                </div>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
