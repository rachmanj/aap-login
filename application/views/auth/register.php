<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bootstrap/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="login-form">
        <form action="auth/register" method="post">
            <h2 class="text-center">Log in</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Fullname">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password1" class="form-control" id="password1" name="password1" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password2" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <div class="clearfix">
                <a href="<?= base_url('auth'); ?>" class="pull-right">Already have account?</a>
            </div>
        </form>
    </div>
</body>

</html>