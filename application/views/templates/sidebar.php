<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-square-root-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SPK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php echo $url == 'Dashboard' ? "active" : '' ?>">
                <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php echo $url == 'Alternatif' ? "active" : '' ?> || <?php echo $url == 'Kriteria' ? "active" : '' ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master Data</span>
                </a>

                <div id="collapseTwo" class="collapse <?php echo $url == 'Alternatif' ? "show" : '' ?> || <?php echo $url == 'Kriteria' ? "show" : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List Menu Management :</h6>
                        <a class="collapse-item <?php echo $url == 'Alternatif' ? "active" : '' ?>" href="<?php echo base_url('alternatif'); ?>"><i class="fas fa-fw fa-users mr-2"></i>Data Alternatif</a>
                        <a class="collapse-item <?php echo $url == 'Kriteria' ? "active" : '' ?>" href="<?php echo base_url('kriteria'); ?>"><i class="fas fa-fw fa-address-book mr-2"></i>Data Kriteria</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item <?php echo $url == 'Nilai' ? "active" : '' ?> || <?php echo $url == 'Metode' ? "active" : '' ?>">
                <a class="nav-link collapsed pt-0" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Data Metode</span>
                </a>
                <div id="collapseUtilities" class="collapse <?php echo $url == 'Nilai' ? "show" : '' ?> || <?php echo $url == 'Metode' ? "show" : '' ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">List Data Metode :</h6>
                        <a class="collapse-item <?php echo $url == 'Nilai' ? "active" : '' ?>" href="<?php echo base_url('nilai'); ?>"><i class="fas fa-fw fa-divide mr-2"></i>Data Nilai</a>
                        <a class="collapse-item <?php echo $url == 'Metode' ? "active" : '' ?>" href="<?php echo base_url('metode'); ?>"><i class="fas fa-fw fa-percentage mr-2"></i>Data Perhitungan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?php echo $url == 'Warga' ? "active" : '' ?>">
                <a class="nav-link pt-2" href="<?php echo base_url('warga'); ?>">
                    <i class="fas fa-fw fa-calendar-day"></i>
                    <span>Data Awal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->