  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              &nbsp;
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-bookmark"></i> Data Master</a></li>
              <li class="active"><a href="#"><i class="fa fa-line-chart"></i> Data Kriteria</a></li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="box">
              <div class="box-header">
                  <h3 class="box-title">Data Kriteria</h3>
                  <small>(Kriteria menjadi patokan dalam pemilihan sebuah alternatif)</small>
                  <a href="<?= base_url('kriteria/insert') ?>" class="btn btn-sm btn-primary pull-right">Tambah Data</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Nama Kriteria</th>
                              <th>Tipe</th>
                              <th>Bobot</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($data as $key => $value) : ?>
                              <tr>
                                  <td><?= ++$key; ?></td>
                                  <td><?= $value->nama_kriteria ?></td>
                                  <td><?= $value->tipe ?></td>
                                  <td><?= $value->bobot ?></td>
                                  <td>
                                      <a href="<?= site_url("kriteria/update/" . $value->id_kriteria) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                      <a href="<?= site_url("kriteria/delete/" . $value->id_kriteria) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&nbsp; Delete</a>
                                  </td>
                              </tr>
                          <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>No.</th>
                              <th>Nama Kriteria</th>
                              <th>Tipe</th>
                              <th>Bobot</th>
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