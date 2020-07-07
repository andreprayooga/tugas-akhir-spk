<?php
    $alternatif = "select tb_nilai.fk_id_alternatif, tb_alternatif.id_alternatif, tb_alternatif.nama_alternatif from tb_alternatif join tb_nilai on tb_alternatif.id_alternatif";
    $option = $this->db->query($alternatif)->result();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              &nbsp;
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-bookmark"></i> Data Metode</a></li>
              <li><a href="#"><i class="fa fa-file-code-o"></i> Update Data Nilai</a></li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <!-- general form elements -->
          <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">Form Update Data Nilai Alternatif</h3>
              </div>
              <!-- /.box-header -->

              <!-- form start -->
              <form action="<?= site_url('nilai/insert/ . $data->id_nilai'); ?>" method="POST">
                  <div class="box-body">
                      <div class="form-group">
                          <label for="nama_alternatif">Nama Alternatif</label>
                          <select class="form-control" name="fk_id_alternatif" id="fk_id_alternatif">
                              <?php foreach($option as $value) : ?>
                              <option value="<?= $value->id_alternatif ?>" <?= $value->fk_id_alternatif == $value->id_alternatif ? "selected" : "" ?>><?= $value->nama_alternatif ?></option>
                              <?php endforeach; ?>
                          </select>
                          <?= form_error('fk_id_alternatif', '<small class="text-danger pl-3">', '</small>') ?>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="kriteria1">Kriteria 1</label>
                                  <select class="form-control" name="kriteria1" id="kriteria1">
                                      <option>-- Pilih Kriteria Status Bangunan Tinggal --</option>
                                      <option value="100">Milik Sendiri</option>
                                      <option value="80">Kontrak / Sewa</option>
                                      <?= set_value('kriteria1') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="kriteria2">Kriteria 2</label>
                                  <select class="form-control" name="kriteria2" id="kriteria2">
                                      <option>-- Pilih Kriteria Status Lahan Tinggal --</option>
                                      <option value="100">Milik Sendiri</option>
                                      <option value="80">Milik Orang Lain</option>
                                      <?= set_value('kriteria2') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria3">Kriteria 3</label>
                                  <select class="form-control" name="kriteria3" id="kriteria3">
                                      <option>-- Pilih Kriteria Jenis Lantai Terluas --</option>
                                      <option value="100">Keramik</option>
                                      <option value="80">Parket / Vinil / Permadani</option>
                                      <option value="50">Ubin / Tegel Teraso</option>
                                      <option value="30">Semen / Bata Merah</option>
                                      <option value="10">Bambu</option>
                                      <?= set_value('kriteria3') ?>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria4">Kriteria 4</label>
                                  <select class="form-control" name="kriteria4" id="kriteria4">
                                      <option>-- Pilih Kriteria Jenis Dinding --</option>
                                      <option value="100">Tembok</option>
                                      <option value="80">Plesteran Anyaman Bambu / Kawat</option>
                                      <option value="60">Kayu</option>
                                      <option value="40">Anyaman Bambu</option>
                                      <option value="20">Batang Kayu</option>
                                      <option value="10">Bambu</option>
                                      <?= set_value('kriteria4') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria5">Kriteria 5</label>
                                  <select class="form-control" name="kriteria5" id="kriteria5">
                                      <option>-- Pilih Kriteria Kondsi Dinding --</option>
                                      <option value="100">Bagus / Kualitas Tinggi</option>
                                      <option value="50">Jelek / Kualitas Rendah</option>
                                      <?= set_value('kriteria5') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria6">Kriteria 6</label>
                                  <select class="form-control" name="kriteria6" id="kriteria6">
                                      <option>-- Pilih Kriteria Jenis Atap --</option>
                                      <option value="100">Genteng Tanah Liat</option>
                                      <option value="60">Beton / Cor</option>
                                      <option value="30">Seng / Esbes</option>
                                      <?= set_value('kriteria6') ?>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria7">Kriteria 7</label>
                                  <select class="form-control" name="kriteria7" id="kriteria7">
                                      <option>-- Pilih Kriteria Kondisi Atap --</option>
                                      <option value="100">Bagus / Kualitas Tinggi</option>
                                      <option value="50">Jelek / Kualitas Rendah</option>
                                      <?= set_value('kriteria7') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria8">Kriteria 8</label>
                                  <select class="form-control" name="kriteria8" id="kriteria8">
                                      <option>-- Pilih Kriteria Sumber Air Minum --</option>
                                      <option value="100">Leding Meteran</option>
                                      <option value="80">Sumur Bor / Pompa</option>
                                      <option value="60">Sumur Terlindung</option>
                                      <option value="40">Sumur Tak Terlindung </option>
                                      <option value="30">Mata Air Terlindung </option>
                                      <option value="10">Mata Air Tak Terlindung </option>
                                      <?= set_value('kriteria8') ?>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                          <div class="form-group">
                                  <label for="kriteria9">Kriteria 9</label>
                                  <select class="form-control" name="kriteria9" id="kriteria9">
                                      <option>-- Pilih Kriteria Sumber Penerangan --</option>
                                      <option value="100">Listrik PLN</option>
                                      <option value="50">Listrik NON - PLN</option>
                                      <option value="20">Bukan Listrik</option>
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