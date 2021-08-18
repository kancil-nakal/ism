<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h2><b>IT SYSTEM MANAGEMENT</b></h2>
        </div>
        <div class="card-body">

            <form action="<?= base_url('auth/registration'); ?>" method="post">
                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email', '<small class="text-danger ">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <br>
            <a href="login.html" class="text-center">I already have a account</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->