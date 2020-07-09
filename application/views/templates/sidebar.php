  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
                  <img src="<?= base_url('assets/'); ?>dist/img/user2-160x160.jpg" class="img-circle img-thumbnail" alt="User Image">
              </div>
              <div class="pull-left info">
                  <p><?= $session_login['nama_lengkap']; ?></p>
                  <p><small>Role : <?= $session_login['fk_id_level']; ?></small></p>
              </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search" disabled>
                  <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                          <i class="fa fa-search"></i>
                      </button>
                  </span>
              </div>
          </form>
          <!-- /.search form -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MENU MANAGEMENT</li>
              <li class="<?= $url == 'Dashboard' ? 'active' : '' ?>">
                  <a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i>
                      Dashboard
                  </a>
              </li>
              <li class="<?= $url == 'Alternatif' ? 'active' : '' ?>"><a href="<?= base_url('alternatif'); ?>"><i class="fa fa-users"></i> Data Alternatif</a></li>
              <li class="<?= $url == 'Kriteria' ? 'active' : '' ?>"><a href="<?= base_url('kriteria'); ?>"><i class="fa fa-line-chart"></i> Data Kriteria</a></li>
              <li class="<?= $url == 'Nilai' ? 'active' : '' ?>"><a href="<?= base_url('nilai'); ?>"><i class="fa fa-area-chart"></i> Data Nilai </a></li>
              <li class="<?= $url == 'Metode' ? 'active' : '' ?>"><a href="<?= base_url('metode'); ?>"><i class="fa fa-bar-chart"></i> Metode Perhitungan </a></li>
              <li class="header">SETTINGS</li>
              <li>
                  <a href="<?= site_url('auth/logout') ?>"><i class="fa fa-sign-out"></i> <span>Keluar</span>
                  </a>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>