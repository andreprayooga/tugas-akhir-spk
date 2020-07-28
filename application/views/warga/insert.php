<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-4 text-gray-800">Tambah Data Warga</h1>

    <form action="<?php echo site_url('warga/insert'); ?>" method="post">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" value="<?php echo set_value('nik'); ?>" placeholder="Masukkan NIK">
                <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
                <label for="nama_warga">Nama Warga</label>
                <input type="text" class="form-control" name="nama_warga" id="nama_warga" value="<?php echo set_value('nama_warga'); ?>" placeholder="Masukkan Nama Warga">
                <?php echo form_error('nama_warga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-1">
                <label for="usia">Usia</label>
                <input type="text" class="form-control" name="usia" id="usia" value="<?php echo set_value('usia'); ?>" placeholder="18+">
                <?php echo form_error('usia', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="status_bangunan_tinggal">Status Bangunan Tinggal</label>
                <select id="status_bangunan_tinggal" name="status_bangunan_tinggal" class="form-control">
                    <option selected>-- Pilih Status Bangunan --</option>
                    <option>Milik Sendiri</option>
                    <option>Kontrak / Sewa</option>
                    <option>Bebas Sewa</option>
                    <?php echo set_value('status_bangunan_tinggal') ?>
                </select>
                <?php echo form_error('status_bangunan_tinggal', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="status_lahan_tinggal">Status Lahan Tinggal</label>
                <select id="status_lahan_tinggal" name="status_lahan_tinggal" class="form-control">
                    <option selected>-- Pilih Status Lahan --</option>
                    <option>Milik Sendiri</option>
                    <option>Milik Orang Lain</option>
                    <option>Tanah Negara</option>
                    <?php echo set_value('status_lahan_tinggal') ?>
                </select>
                <?php echo form_error('status_lahan_tinggal', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="jenis_lantai_terluas">Jenis Lantai</label>
                <select id="jenis_lantai_terluas" name="jenis_lantai_terluas" class="form-control">
                    <option selected>-- Pilih Jenis Lantai --</option>
                    <option>Keramik</option>
                    <option>Parket / Vinil / Permadani</option>
                    <option>Ubin / Tegel / Teraso</option>
                    <option>Semen / Bata Merah</option>
                    <option>Tanah</option>
                    <?php echo set_value('jenis_lantai_terluas') ?>
                </select>
                <?php echo form_error('jenis_lantai_terluas', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="jenis_dinding">Jenis Dinding</label>
                <select id="jenis_dinding" name="jenis_dinding" class="form-control">
                    <option selected>-- Pilih Jenis Tembok --</option>
                    <option>Tembok</option>
                    <option>Plesteran Anyaman Bambu</option>
                    <option>Anyaman Bambu</option>
                    <option>Batang Kayu</option>
                    <option>Bambu</option>
                    <?php echo set_value('jenis_dinding') ?>
                </select>
                <?php echo form_error('jenis_dinding', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="kondisi_dinding">Kondisi Dinding</label>
                <select id="kondisi_dinding" name="kondisi_dinding" class="form-control">
                    <option selected>-- Pilih Kondisi Dinding --</option>
                    <option>Bagus / Kualitas Tinggi</option>
                    <option>Jelek / Kualitas Rendah</option>
                    <?php echo set_value('kodisi_dinding') ?>
                </select>
                <?php echo form_error('kondisi_dinding', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="jenis_atap">Jenis Atap</label>
                <select id="jenis_atap" name="jenis_atap" class="form-control">
                    <option selected>-- Pilih Jenis Atap --</option>
                    <option>Genteng Beton</option>
                    <option>Genteng Tanah Liat</option>
                    <option>Beton / Cor</option>
                    <option>Seng / Esbes</option>
                    <?php echo set_value('jenis_atap') ?>
                </select>
                <?php echo form_error('jenis_atap', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="kondisi_atap">Kondisi Atap</label>
                <select id="kondisi_atap" name="kondisi_atap" class="form-control">
                    <option selected>-- Pilih Kondisi Atap --</option>
                    <option>Bagus / Kualitas Tinggi</option>
                    <option>Jelek / Kualitas Rendah</option>
                    <?php echo set_value('kondisi_atap') ?>
                </select>
                <?php echo form_error('kondisi_atap', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="sumber_air_minum">Sumber Air Minum</label>
                <select id="sumber_air_minum" name="sumber_air_minum" class="form-control">
                    <option selected>-- Pilih Sumber Air Minum --</option>
                    <option>Leding Meteran</option>
                    <option>Sumur Bor / Pompa</option>
                    <option>Sumur Terlindung</option>
                    <option>Sumur Tak Terlindung</option>
                    <option>Mata Air Terlindung</option>
                    <?php echo set_value('sumber_air_minum') ?>
                </select>
                <?php echo form_error('sumber_air_minum', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="sumber_penerangan">Sumber Penerangan</label>
                <select id="sumber_penerangan" name="sumber_penerangan" class="form-control">
                    <option selected>-- Pilih Sumber Penerangan --</option>
                    <option>Listrik PLN</option>
                    <option>Listrik NON - PLN</option>
                    <option>Bukan Listrik</option>
                    <?php echo set_value('sumber_penerangan') ?>
                </select>
                <?php echo form_error('sumber_penerangan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group">
            <a href="<?php echo base_url('warga'); ?>" class="btn btn-sm btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->