  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              &nbsp;
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#"><i class="fa fa-user-plus"></i> Insert Data Alternatif</a></li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <!-- general form elements -->
          <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">Form Insert Data Alternatif</h3>
              </div>
              <!-- /.box-header -->

              <!-- form start -->
              <form action="<?= site_url('Alternatif/insert'); ?>" method="POST">
                  <div class="box-body">
                      <div clas s="form-group">
                          <label for="kode_alternatif">Kode Alternatif</label>
                          <input type="text" class="form-control" name="kode_alternatif" id="kode_alternatif" placeholder="Masukkan Kode Alternatif" autocomplete="off" value="<?= set_value('kode_alternatif'); ?>">
                          <?= form_error('kode_alternatif', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                      <div class="form-group">
                          <label for="nama_alternatif">Nama Alternatif</label>
                          <input type="text" class="form-control" name="nama_alternatif" id="nama_alternatif" placeholder="Masukkan Nama Alternatif" autocomplete="off" value="<?= set_value('nama_alternatif'); ?>">
                          <?= form_error('nama_alternatif', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
          </div>
          <!-- /.box -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->