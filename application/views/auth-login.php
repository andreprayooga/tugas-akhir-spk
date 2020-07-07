<div class="login-box">
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p>Hai, Selamat Datang!</p>
        <hr>

        <form method="post" action="<?= base_url('auth/session_login'); ?>">
            <div class="form-group has-feedback">
                <input type="username" class="form-control" name="username" id="username" placeholder="Masukkan Username" autocomplete="off" value="<?= set_value('username'); ?>">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <?= form_error('username','<small class="text-danger pl-3">','</small>' ); ?>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?= form_error('password','<small class="text-danger pl-3">','</small>' ); ?>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4 pull-right">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->