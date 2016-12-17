<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
     <script src='https://cdn.tinymce.com/4/tinymce.min.js'></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=VT323');
    </style>
    <script>
        tinymce.init({
            selector: "textarea"
        });
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <a class="navbar-brand" href="<?=APP_ROOT?>"><font
                        size="6"
                        face="VT323"
                        color="orange"><?=htmlspecialchars("<?php")?><font color="#9370db">Devs</font>></font> </a>
                </div>
                <ul class="nav navbar-nav">
                    <?php if ($this->isLoggedIn) : ?>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"  href="#"> <font color="orange">  Categories</font><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=APP_ROOT?>/posts"><font color="#9370db">  Pussy</font></a></li>
                            <li><a href="<?=APP_ROOT?>/posts"><font color="#9370db">  Money</font></a></li>
                            <li><a href="<?=APP_ROOT?>/posts"><font color="#9370db">  Weed</font></a></li>
                        </ul>
                    </li>
                    <li><a href="<?=APP_ROOT?>/posts"><font color="orange">  Posts</font></a></li>
                    <li><a href="<?=APP_ROOT?>/posts/create"><font color="orange">  Create Post</font></a></li>
                    <li><a href="<?=APP_ROOT?>/users"><font color="orange"> Users</font></a></li>
                </ul>
                    <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=APP_ROOT?>/users/login"><span class="glyphicon glyphicon-log-in logo-small"></span><font color="orange">  Login</font></a></li>
                    <li><a href="<?=APP_ROOT?>/users/register"><span class="glyphicon glyphicon-user logo-small"></span><font color="#9370db"> Sign up</font></font> </a></li>
                </ul>
            </div>
    <?php endif; ?>
    <?php if ($this->isLoggedIn) : ?>
    <div id="logged-in-info">
        <li><a href="<?=APP_ROOT?>/users/logout"><span class="glyphicon glyphicon-log-out logo-small"></span><font color="orange">  Logout</font></a></li>
    </div>
</nav>
    <?php endif; ?>
</header>

<?php require_once('show-notify-messages.php'); ?>

