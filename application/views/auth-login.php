<div id="app">
    <section class="section">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="<?= base_url('assets') ?>/img/stisla-fill.svg" alt="logo" width="70" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Hai, Login dulu yuk!</h4>
                        </div>

                        <div class="card-body">


                        <?= validation_errors(); ?>
                        <?= $this->session->flashdata('message'); ?>

                            <form method="POST" action="<?= site_url('Auth') ?>" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="username" class="form-control" name="username" tabindex="1" autocomplete="off" placeholder="Masukkan Username" value="<?= set_value('username') ?>" required autofocus>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="Masukkan Password" required>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Sistem Pendukung Keputusan - MOORA 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>