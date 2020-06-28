<div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">SPK - MOORA</a>
                        <img src="<?= base_url('assets'); ?>/img/kediri.png" alt="" class="img-fluid img-thumbnail" width="60%">
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">SPK</a>
                    </div>
                    <br><br><br><br>
                    <ul class="sidebar-menu pt-3">
                        <li class="menu-header">Menu</li>
                        <li class="nav-item <?php echo $url == 'Dashboard' ? "active" : ''?>">
                            <a href="<?= site_url('Dashboard') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                        <li class="<?php echo $url == 'Warga' ? "active" : ''?>">
                            <a class="nav-link" href="<?= site_url('Warga') ?>"><i class="fas fa-users"></i> <span>Data Warga</span></a>
                        </li>
                        <li class="<?php echo $url == 'Kriteria' ? "active" : ''?>">
                            <a class="nav-link" href="<?= site_url('Kriteria') ?>"><i class="fas fa-list-ol"></i> <span>Data Kriteria</span></a>
                        </li>
                        <li class="<?php echo $url == 'Nilai' ? "active" : ''?>">
                            <a class="nav-link" href="<?= site_url('Nilai') ?>"><i class="fas fa-not-equal"></i> <span>Data Nilai Warga</span></a>
                        </li>
                        <li class="<?php echo $url == 'Metode' ? "active" : ''?>">
                            <a class="nav-link" href="<?= site_url('Metode') ?>"><i class="fas fa-square-root-alt"></i> <span>Metode Perhitungan</span></a>
                        </li>
                    </ul>

                    <div class="mt-0 mb-4 p-3 hide-sidebar-mini">
                        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Documentation
                        </a>
                    </div>
                </aside>
            </div>