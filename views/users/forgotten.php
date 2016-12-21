<div class="login-index">
<?php $this->title = 'Reset your password'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>


<form method="post" class="form-inline">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user logo-small"></i></span>
        <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
    </div><br><br>
    <button type="submit" value="Login" class="btn btn-primary">Reset Password</button>
</form>
</div>