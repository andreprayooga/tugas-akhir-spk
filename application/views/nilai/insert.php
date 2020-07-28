<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- Page Heading -->
    <h1 class="h4 mb-2 text-gray-800">Tambah Data Nilai Seiap Alternatif</h1>

    <form action="<?php echo site_url('nilai/insert'); ?>" method="post">
        <hr>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fk_id_warga">ID / Nama Warga</label>
                <select class="form-control" name="fk_id_warga" id="fk_id_warga">
                    <option selected>-- Pilih Nama Warga --</option>
                    <?php foreach ($this->db->get('tb_warga')->result_array() as $key => $value) : ?>
                        <option value="<?php echo $value['id_warga'] ?>"><?php echo $value['nama_warga'] ?></option>
                    <?php endforeach ?>
                    <?php echo form_error('fk_id_warga', '<small class="text-danger pl-3">', '</small>'); ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="kriteria1">Status Bangunan Tinggal</label>
                <select id="kriteria1" name="kriteria1" class="form-control">
                    <option selected>-- Pilih Status Bangunan --</option>
                    <option value="50">Milik Sendiri</option>
                    <option value="40">Kontrak / Sewa</option>
                    <option value="30">Bebas Sewa</option>
                </select>
                <?php echo form_error('kriteria1', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="kriteria2">Status Lahan Tinggal</label>
                <select id="kriteria2" name="kriteria2" class="form-control">
                    <option selected>-- Pilih Status Lahan --</option>
                    <option value="50">Milik Sendiri</option>
                    <option value="40">Milik Orang Lain</option>
                    <option value="30">Tanah Negara</option>
                </select>
                <?php echo form_error('kriteria2', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="kriteria3">Jenis Lantai</label>
                <select id="kriteria3" name="kriteria3" class="form-control">
                    <option selected>-- Pilih Jenis Lantai --</option>
                    <option value="50">Keramik</option>
                    <option value="40">Parket / Vinil / Permadani</option>
                    <option value="30">Ubin / Tegel / Teraso</option>
                    <option value="20">Semen / Bata Merah</option>
                    <option value="10">Tanah</option>
                </select>
                <?php echo form_error('kriteria3', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="kriteria4">Jenis Dinding</label>
                <select id="kriteria4" name="kriteria4" class="form-control">
                    <option selected>-- Pilih Jenis Tembok --</option>
                    <option value="50">Tembok</option>
                    <option value="40">Plesteran Anyaman Bambu</option>
                    <option value="30">Anyaman Bambu</option>
                    <option value="20">Batang Kayu</option>
                    <option value="10">Bambu</option>
                </select>
                <?php echo form_error('kriteria4', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="kriteria5">Kondisi Dinding</label>
                <select id="kriteria5" name="kriteria5" class="form-control">
                    <option selected>-- Pilih Kondisi Dinding --</option>
                    <option value="50">Bagus / Kualitas Tinggi</option>
                    <option value="10">Jelek / Kualitas Rendah</option>
                </select>
                <?php echo form_error('kriteria5', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="kriteria6">Jenis Atap</label>
                <select id="kriteria6" name="kriteria6" class="form-control">
                    <option selected>-- Pilih Jenis Atap --</option>
                    <option value="50">Genteng Beton</option>
                    <option value="40">Genteng Tanah Liat</option>
                    <option value="30">Beton / Cor</option>
                    <option value="20">Seng / Esbes</option>
                </select>
                <?php echo form_error('kriteria6', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="kriteria7">Kondisi Atap</label>
                <select id="kriteria7" name="kriteria7" class="form-control">
                    <option selected>-- Pilih Kondisi Atap --</option>
                    <option value="50">Bagus / Kualitas Tinggi</option>
                    <option value="10">Jelek / Kualitas Rendah</option>
                </select>
                <?php echo form_error('kriteria7', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="kriteria8">Sumber Air Minum</label>
                <select id="kriteria8" name="kriteria8" class="form-control">
                    <option selected>-- Pilih Sumber Air Minum --</option>
                    <option value="50">Leding Meteran</option>
                    <option value="40">Sumur Bor / Pompa</option>
                    <option value="30">Sumur Terlindung</option>
                    <option value="20">Sumur Tak Terlindung</option>
                    <option value="10">Mata Air Terlindung</option>
                </select>
                <?php echo form_error('kriteria8', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="kriteria9">Sumber Penerangan</label>
                <select id="kriteria9" name="kriteria9" class="form-control">
                    <option selected>-- Pilih Sumber Penerangan --</option>
                    <option value="50">Listrik PLN</option>
                    <option value="30">Listrik NON - PLN</option>
                    <option value="10">Bukan Listrik</option>
                </select>
                <?php echo form_error('kriteria9', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group">
            <a href="<?php echo base_url('nilai'); ?>" class="btn btn-sm btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->