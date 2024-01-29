        <div class="container-scroller">
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="/Home/"><img src="<?= base_url('/assets/brand_logo') ?>/expand-kitsu-library.png" class="mr-2" alt="logo"></a>
                    <a class="navbar-brand brand-logo-mini" href="/Home/"><img src="<?= base_url('/assets/brand_logo') ?>/collapse-kitsu-library.png" alt="logo"></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown"><img src="<?= base_url('assets/stored_profile_pic/'.($settings -> profile ? $settings -> profile : 'default-profile.png')) ?>" alt="profile"/></a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="ti-settings text-primary"></i>Settings
                                </a>
                                <a href="<?= base_url('/home/authentication_logout') ?>" class="dropdown-item">
                                    <i class="ti-power-off text-primary"></i>Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>

            <div class="container-fluid page-body-wrapper">

                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <!-- Start: Menu -->
                        <ul class="nav">

                            <li class="nav-item active">
                                <a class="nav-link" href="/Home/dashboard/?">
                                    <i class="fas fa-house-chimney menu-icon"></i>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </li>

                            <hr>

                            <li class="nav-item">
                                <a class="nav-link" href="/Buku/kategori_buku/?">
                                    <i class="fas fa-book-bookmark menu-icon"></i>
                                    <span class="menu-title">Kategori Buku</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/Buku/?">
                                    <i class="fas fa-book menu-icon"></i>
                                    <span class="menu-title">Buku</span>
                                </a>
                            </li>

                            <hr>

                            <li class="nav-item">
                                <a class="nav-link" href="/home/kategori_buku/?">
                                    <i class="fas fa-calendar-day menu-icon"></i>
                                    <span class="menu-title">Peminjaman</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="/home/kategori_buku/?">
                                    <i class="fas fa-print menu-icon"></i>
                                    <span class="menu-title">Laporan Peminjaman</span>
                                </a>
                            </li>

                        </ul>
                    <!-- End: Menu -->

                    <!-- Start: Menu -->
                        <ul class="nav">

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
                                    <i class="fas fa-user-gear menu-icon"></i>
                                    <span class="menu-title">User</span>
                                    <i class="menu-arrow"></i>
                                </a>
                                <div class="collapse" id="user">
                                    <ul class="nav flex-column sub-menu">
                                        <li class="nav-item"> <a href="/Home/user_petugas/" class="nav-link">Petugas </a></li>
                                        <li class="nav-item"> <a href="/Home/user_peminjam/" class="nav-link">Member </a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/home/kategori_buku/?">
                                    <i class="fas fa-scroll menu-icon"></i>
                                    <span class="menu-title">History logs</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/home/kategori_buku/?">
                                    <i class="fas fa-gears menu-icon"></i>
                                    <span class="menu-title">Settings</span>
                                </a>
                            </li>

                        </ul>
                    <!-- End: Menu -->
                </nav>