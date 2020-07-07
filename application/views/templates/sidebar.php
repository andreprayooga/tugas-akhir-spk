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
                  <p><?= $session_login['username']; ?>zzzz</p>
                  <p><small>Role : Administrator</small></p>
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
              <li class="treeview <?= $url == 'Alternatif' ? 'active' : '' ?> || <?= $url == 'Kriteria' ? 'active' : '' ?>">
                  <a href="#">
                      <i class="fa fa-bookmark"></i>
                      <span>Data Master</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href=""><i class="fa fa-users"></i> Data Warga</a></li>
                      <li class="<?= $url == 'Alternatif' ? 'active' : '' ?>"><a href="<?= base_url('alternatif'); ?>"><i class="fa fa-user-plus"></i> Data Alternatif</a></li>
                      <li class="<?= $url == 'Kriteria' ? 'active' : '' ?>"><a href="<?= base_url('kriteria'); ?>"><i class="fa fa-line-chart"></i> Data Kriteria</a></li>
                  </ul>
              </li>
              <li class="header">MENU COMPONENT</li>
              <li class="treeview <?= $url == 'Nilai' ? 'active' : '' ?> || <?= $url == 'Metode' ? 'active' : '' ?>">
                  <a href="#">
                      <i class="fa fa-bookmark"></i>
                      <span>Data Metode</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li class="<?= $url == 'Nilai' ? 'active' : '' ?>"><a href="<?= base_url('nilai'); ?>"><i class="fa fa-file-code-o"></i> Data Nilai</a></li>
                      <li class="<?= $url == 'Metode' ? 'active' : '' ?>"><a href="<?= base_url('metode'); ?>"><i class="fa fa-bar-chart"></i> Data Perhitungan</a></li>
                  </ul>
              </li>
              <li class="header">SETTINGS</li>
              <li>
              <li class="treeview ">
                  <a href="#">
                      <i class="fa fa-bookmark"></i>
                      <span>Utilities</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li class=""><i class="fa fa-file-code-o"></i> My Profile</a></li>
                      <li class=""><i class="fa fa-bar-chart"></i> Activity Status</a></li>
                  </ul>
              </li>
              </a>
              </li>
              <li>
                  <a href="<?= site_url('auth/logout') ?>"><i class="fa fa-sign-out"></i> <span>Keluar</span>
                  </a>
              </li>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>