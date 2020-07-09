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
                  <h3 class="box-title">Data Detail Nilai</h3>
                  <small>(Detail nilai setiap alternatif dan kriteria)</small>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Nama Alternatif</th>
                              <th>Nama Kriteria</th>
                              <th>Total Nilai</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $i = 1; 
                            foreach ($nilai as $val) {
                                ?>
                                <tr>
                                <td><?= $i++ ?></td>
                                    <td><?= $val->nama_alternatif; ?></td>
                                    <td><?= $val->nama_kriteria; ?></td>
                                    <td><?= $val->total_nilai; ?></td>
                                    <td>
                                    <a href="<?= site_url('nilai/update' . $val->fk_id_alternatif) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                    </td>
                                </tr>
                            }
                          ?>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>No.</th>
                              <th>Nama Alternatif</th>
                              <th>Nama Kriteria</th>
                              <th>Total Nilai</th>
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