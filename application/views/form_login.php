    <body class="bg-primary" id="bg-3d" style="width: 100%; height: 100vh;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Halaman Login</h3>
                                    </div>


                                    <div class="flash-data-login" data-flashdata="<?= $this->session->flashdata('pesan') ?>"></div>
                                    <div class="flash-data-regis" data-flashdata="<?= $this->session->flashdata('regis') ?>"></div>


                                    <form method="POST" action="<?php echo base_url('auth/login') ?>">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Masukan Username Anda" name="username" />
                                                <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div'); ?>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Masukan Password Anda" name="password" />
                                                <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div'); ?>
                                            </div>
                                            <button type="submit" class="btn btn-primary form-control">Login</button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('registrasi'); ?>">
                                            Belum Punya Akun? Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        </html>