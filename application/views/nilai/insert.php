  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              &nbsp;
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-bookmark"></i> Data Metode</a></li>
              <li><a href="#"><i class="fa fa-file-code-o"></i> Insert Data Nilai</a></li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <!-- general form elements -->
          <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">Form Insert Data Nilai Alternatif</h3>
              </div>
              <!-- /.box-header -->

              <!-- form start -->
              <form action="<?= site_url('nilai/insert'); ?>" method="POST">
                  <div class="box-body">
                      <div class="form-group">
                          <label for="nama_alternatif">Nama Alternatif</label>
                          <select class="form-control" name="fk_id_alternatif" id="fk_id_alternatif">
                              <option>Pilih Nama Alternatif</option>
                              <?php foreach($this->db->get('tb_alternatif')->result_array() as $key => $value): ?>
                              <option value="<?= $value['id_alternatif'] ?>"><?= $value['nama_alternatif'] ?></option>
                              <?php endforeach; ?>
                          </select>
                          <?= form_error('fk_id_alternatif', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="kriteria1">Status Bangunan Tinggal</label>
                                  <select class="form-control" name="kriteria1" id="kriteria1">
                                      <option>-- Pilih Status Bangunan Tinggal --</option>
                                      <option value="50">Milik Sendiri</option>
                                      <option value="40">Kontrak / Sewa</option>
                                      <option value="30">Bebas Sewa</option>
                                      <?= set_value('kriteria1') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="kriteria2">Status Lahan Tinggal</label>
                                  <select class="form-control" name="kriteria2" id="kriteria2">
                                      <option>-- Pilih Status Lahan Tinggal --</option>
                                      <option value="50">Milik Sendiri</option>
                                      <option value="40">Milik Orang Lain</option>
                                      <option value="30">Tanah Negara</option>
                                      <?= set_value('kriteria2') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria3">Jenis Lantai Terluas</label>
                                  <select class="form-control" name="kriteria3" id="kriteria3">
                                      <option>-- Pilih Jenis Lantai Terluas --</option>
                                      <option value="50">Keramik</option>
                                      <option value="40">Parket / Vinil / Permadani</option>
                                      <option value="30">Ubin / Tegel Teraso</option>
                                      <option value="20">Semen / Bata Merah</option>
                                      <option value="10">Tanah</option>
                                      <?= set_value('kriteria3') ?>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria4">Jenis Dinding</label>
                                  <select class="form-control" name="kriteria4" id="kriteria4">
                                      <option>-- Pilih Jenis Dinding --</option>
                                      <option value="50">Tembok</option>
                                      <option value="40">Plesteran Anyaman Bambu / Kawat</option>
                                      <option value="30">Anyaman Bambu</option>
                                      <option value="20">Batang Kayu</option>
                                      <option value="10">Bambu</option>
                                      <?= set_value('kriteria4') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria5">Kondsi Dinding</label>
                                  <select class="form-control" name="kriteria5" id="kriteria5">
                                      <option>-- Pilih Kondsi Dinding --</option>
                                      <option value="50">Bagus / Kualitas Tinggi</option>
                                      <option value="10">Jelek / Kualitas Rendah</option>
                                      <?= set_value('kriteria5') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria6">Jenis Atap</label>
                                  <select class="form-control" name="kriteria6" id="kriteria6">
                                      <option>-- Pilih Jenis Atap --</option>
                                      <option value="50">Genteng Beton</option>
                                      <option value="40">Genteng Tanah Liat</option>
                                      <option value="30">Beton / Cor</option>
                                      <option value="20">Seng / Esbes</option>
                                      <?= set_value('kriteria6') ?>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria7">Kondisi Atap</label>
                                  <select class="form-control" name="kriteria7" id="kriteria7">
                                      <option>-- Pilih Kondisi Atap --</option>
                                      <option value="50">Bagus / Kualitas Tinggi</option>
                                      <option value="10">Jelek / Kualitas Rendah</option>
                                      <?= set_value('kriteria7') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria8">Sumber Air Minum</label>
                                  <select class="form-control" name="kriteria8" id="kriteria8">
                                      <option>-- Pilih Sumber Air Minum --</option>
                                      <option value="50">Leding Meteran</option>
                                      <option value="40">Sumur Bor / Pompa</option>
                                      <option value="30">Sumur Terlindung</option>
                                      <option value="20">Sumur Tak Terlindung </option>
                                      <option value="10">Mata Air Terlindung </option>
                                      <?= set_value('kriteria8') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria9">Sumber Penerangan</label>
                                  <select class="form-control" name="kriteria9" id="kriteria9">
                                      <option>-- Pilih Sumber Penerangan --</option>
                                      <option value="50">Listrik PLN</option>
                                      <option value="30">Listrik NON - PLN</option>
                                      <option value="10">Bukan Listrik</option>
                                      <?= set_value('kriteria9') ?>
                                  </select>
                              </div>
                          </div>
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