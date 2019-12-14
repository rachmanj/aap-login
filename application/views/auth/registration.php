<body>
    <div class="login-form">
        <form action="<?= base_url('auth/registration'); ?>" method="post">
            <h2 class="text-center">Registration Form</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
                <?= form_error('name', '<small class="text-danger pd-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                <?= form_error('username', '<small class="text-danger pd-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                <?= form_error('password', '<small class="text-danger pd-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
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