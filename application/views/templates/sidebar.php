<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon">
                    <i class="fa fa-shopping-bag"></i>
                </div>
                <div class="sidebar-brand-text mx-3">INSIDEStore</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('#') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/elektronik') ?>">
                    <i class="fas fa-fw fa-tv"></i>
                    <span>Elektronik</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/pakaian_pria') ?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Pakian Pria</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/pakaian_wanita') ?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Pakian Wanita</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/pakaian_anak_anak') ?>">
                    <i class="fas fa-fw fa-tshirt"></i>
                    <span>Pakian Anak-anak</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/peralatan_olahraga') ?>">
                    <i class="fas fa-fw fa-futbol"></i>
                    <span>Peralatan Olahraga</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php
                                    $keranjang = 'Keranjang Belanja: ' . $this->cart->total_items() . ' items'
                                    ?>

                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right">
                                <?php if ($this->session->userdata('username')) { ?>
                                    <li>
                                        <div class="mt-2">Selamat Datang, <b><?php echo $this->session->userdata('username') ?></b></div>
                                    </li>

                                    <div class="topbar-divider d-none d-sm-block"></div>

                                    <li class="mt-2 ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>

                                <?php } else { ?>

                                    <li><?php echo anchor('auth/login', 'Login'); ?></li>

                                <?php } ?>
                            </ul>

                        </div>



                    </ul>

                </nav>
                <!-- End of Topbar -->