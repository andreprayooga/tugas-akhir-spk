  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              &nbsp;
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-bookmark"></i> Data Metode</a></li>
              <li><a href="#"><i class="fa fa-file-code-o"></i> Data Nilai</a></li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="box">
              <div class="box-header">
                  <h3 class="box-title">Data Nilai</h3>
                  <small>(Setiap alternatif akan dinilai berdasarkan kriteria)</small>
                  <a href="<?= base_url('nilai/insert') ?>" class="btn btn-sm btn-primary pull-right">Tambah Data</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Nama Alternatif</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no = 1 ?>
                          <?php if (!empty($nilai)) {
                                $i = 1;
                                foreach ($nilai as $val) { ?>
                                  <tr>
                                      <td><?php echo $no++ ?></td>
                                      <td>
                                          <?php foreach ($alternatif as $value) {
                                                if ($value->id_alternatif == $val->fk_id_alternatif) { ?>

                                          <?php echo $value->nama_alternatif;
                                                }
                                            }
                                            ?>
                                      </td>
                                      <td>
                                          <a href="<?= site_url('nilai/detail_nilai/') . $val->fk_id_alternatif ?>" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i>&nbsp; Detail</a>
                                          <a href="<?= site_url('nilai/delete_alternatif/') . $val->fk_id_alternatif ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp; Delete</a>

                                      </td>

                                  </tr>
                              <?php }
                            } else { ?>
                              <tr>
                                  <td colspan="1">Data Tidak Ada</td>
                                  <td>
                                  <?php } ?>
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>No.</th>
                              <th>Nama Alternatif</th>
                              <th>Action</th>
                          </tr>
                      </tfoot>
                  </table>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->