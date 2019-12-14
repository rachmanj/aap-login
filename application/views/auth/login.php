<body>
    <div class="login-form">
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('auth/login'); ?>" method="post">
            <h2 class="text-center">Log in</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <div class="clearfix">
                <a href="<?= base_url('auth/registration'); ?>" class="pull-left">Create Account?</a>
                <a href="#" class="pull-right">Forgot Password?</a>
            </div>
        </form>
    </div>
</body>