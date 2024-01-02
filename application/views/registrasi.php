<body class="bg-primary" id="bg-3d" style="width: 100%; height: 100vh;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Daftar Akun!</h3>
                                </div>
                                <div class="card-body">


                                    <form method="POST" action="<?php echo base_url('registrasi') ?>">

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="exampleInputEmail" type="text" placeholder="Nama Anda" name="nama" />
                                            <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="exampleInputEmail" type="text" placeholder="Username Anda" name="username" />
                                            <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="exampleInputPassword" type="password" placeholder="Password" name="password_1" />
                                                    <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="exampleRepeatPassword" type="password" placeholder="Ulangi Password" name="password_2" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-user btn-block"> Daftar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?php echo base_url('auth/login') ?>">Sudah Punya Akun? Silahkan Login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>