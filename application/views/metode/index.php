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
                  <h3 class="box-title">Menentukan Nilai Alternatif</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped display">
                      <thead>
                          <tr>
                              <th>Nama Alternatif</th>
                              <?php foreach ($kriteria as $val) : ?>
                                  <th>C<?= $val->id_kriteria ?></th>
                              <?php endforeach ?>
                          </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($alternatif as $alt) : ?>
                          <tr>
                              <td><?= $alt->nama_alternatif ?></td>
                              <?php foreach ($kriteria as $val) :  ?>
                              <td>
                                  <?php $data_nilai = $this->MetodeModel->get_data_nilai($alt->id_alternatif, $val->id_kriteria); 
                                    echo $data_nilai['total_nilai'];
                                  ?>
                              </td>
                              <?php endforeach ?>
                          </tr>
                          <?php endforeach ?>
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>Nama Alternatif</th>
                              <?php foreach ($kriteria as $val) : ?>
                                  <th>C<?= $val->id_kriteria ?></th>
                              <?php endforeach ?>
                          </tr>
                      </tfoot>
                  </table>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </section>
      <!-- /.content -->

            <!-- Main content -->
            <section class="content">
          <div class="box">
              <div class="box-header">
                  <h3 class="box-title">Menentukan Normalisasi Matriks</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped display">
                      <thead>
                          <tr>
                              <th>Nama Alternatif</th>
                              <?php foreach ($kriteria as $val) : ?>
                                  <th>C<?= $val->id_kriteria ?></th>
                              <?php endforeach ?>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($alternatif as $val) : ?>
                          <tr>
                              <td><?= $val->nama_alternatif ?></td>
                          </tr>
                          <?php endforeach ?>
                      </tbody>
                      <tfoot>
                          <tr>
                              <th>Nama Alternatif</th>
                              <?php foreach ($kriteria as $val) : ?>
                                  <th>C<?= $val->id_kriteria ?></th>
                              <?php endforeach ?>
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
