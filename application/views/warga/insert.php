<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-4 text-gray-800">Tambah Data Warga</h1>

    <form action="<?php echo site_url('warga/insert'); ?>" method="post">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" value="<?php echo set_value('nik'); ?>" placeholder="Masukkan NIK">
                <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
                <label for="nama_warga">Nama Warga</label>
                <input type="text" class="form-control" name="nama_warga" id="nama_warga" value="<?php echo set_value('nama_warga'); ?>" placeholder="Masukkan Nama Warga">
                <?php echo form_error('nama_warga', '<small class="text-danger pl-3">', '</small>'); ?>
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
                <?php echo form_error('nama_warga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="status_bangunan_tinggal">Status Bangunan</label>
                <select id="status_bangunan_tinggal" name="status_bangunan_tinggal" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                <?php echo form_error('nama_warga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="status_bangunan_tinggal">Status Bangunan</label>
                <select id="status_bangunan_tinggal" name="status_bangunan_tinggal" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="status_bangunan_tinggal">Status Bangunan</label>
                <select id="status_bangunan_tinggal" name="status_bangunan_tinggal" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                <?php echo form_error('nama_warga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="status_bangunan_tinggal">Status Bangunan</label>
                <select id="status_bangunan_tinggal" name="status_bangunan_tinggal" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                <?php echo form_error('nama_warga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="status_bangunan_tinggal">Status Bangunan</label>
                <select id="status_bangunan_tinggal" name="status_bangunan_tinggal" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="status_bangunan_tinggal">Status Bangunan</label>
                <select id="status_bangunan_tinggal" name="status_bangunan_tinggal" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                <?php echo form_error('nama_warga', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-4">
                <label for="status_bangunan_tinggal">Status Bangunan</label>
                <select id="status_bangunan_tinggal" name="status_bangunan_tinggal" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                <?php echo form_error('nama_warga', '<small class="text-danger pl-3">', '</small>'); ?>
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