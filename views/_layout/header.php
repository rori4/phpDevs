<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        tinymce.init({
            selector: "textarea"
        });
    </script>
    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?=APP_ROOT?>"><?=htmlspecialchars("<?phpDevs>")?></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <?php if ($this->isLoggedIn) : ?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=" href="<?=APP_ROOT?>/posts"> Posts<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?=APP_ROOT?>/posts">Beer</a></li>
                    <li><a href="<?=APP_ROOT?>/posts">Pussy</a></li>
                </ul>
            </li>
            <li><a href="<?=APP_ROOT?>/posts/create">Create Post</a></li>
            <li><a href="<?=APP_ROOT?>/users">Users</a></li>
        </ul>

    <?php else: ?>
    <li><a href="<?=APP_ROOT?>/users/login">Login</a></li>
        <li><a href="<?=APP_ROOT?>/users/register">Register</a></li>
    </div>
    <?php endif; ?>
    <?php if ($this->isLoggedIn) : ?>
    <div id="logged-in-info">
        <span>Hello, <b><?=htmlspecialchars($_SESSION['username'])?></b></span>
        <form method="post" action="<?=APP_ROOT?>/users/logout">
            <input type="submit" value="Logout"/>
        </form>
    </div>
</nav>
    <?php endif; ?>

</header>

<?php require_once('show-notify-messages.php'); ?>

