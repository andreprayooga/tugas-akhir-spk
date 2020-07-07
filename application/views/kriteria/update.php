  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              &nbsp;
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#"><i class="fa fa-line-chart"></i> Update Data Kriteria</a></li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <!-- general form elements -->
          <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">Form Update Data Kriteria</h3>
              </div>
              <!-- /.box-header -->

              <!-- form start -->
              <form action="<?= site_url('kriteria/update/' . $data->id_kriteria); ?>" method="POST">
                  <div class="box-body">
                      <div clas s="form-group">
                          <label for="nama_kriteria">Nama Kriteria</label>
                          <input type="text" class="form-control" name="nama_kriteria" id="nama_kriteria" placeholder="Masukkan Nama Kriteria" autocomplete="off" value="<?= $data->nama_kriteria ?>">
                          <?= form_error('nama_kriteria', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                      <div class="form-group">
                          <label for="tipe">Tipe Kriteria</label>
                          <input type="text" class="form-control" name="tipe" id="tipe" placeholder="Masukkan Tipe Kriteria" autocomplete="off" value="<?= $data->tipe ?>">
                          <?= form_error('tipe', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                      <div class="form-group">
                          <label for="bobot">Bobot Kriteria</label>
                          <input type="text" class="form-control" name="bobot" id="bobot" placeholder="Masukkan Bobot Kriteria" autocomplete="off" value="<?= $data->bobot ?>">
                          <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>') ?>
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