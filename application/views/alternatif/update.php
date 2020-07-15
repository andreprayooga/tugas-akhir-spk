<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-4 text-gray-800">Form Update Alternatif</h1>
    <!-- Page Heading -->
    <form action="<?php echo site_url('alternatif/update/' . $data->id_alternatif); ?>" method="post">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="kode_alternatif">Kode Alternatif</label>
                <input type="text" class="form-control form-control-sm" id="kode_alternatif" name="kode_alternatif" value="<?php echo $data->kode_alternatif ?>" placeholder="" readonly>
                <?php echo form_error('kode_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group col-md-3">
                <label for="nama_alternatif">Nama Alternatif</label>
                <input type="text" class="form-control form-control-sm" id="nama_alternatif" name="nama_alternatif" value="<?php echo $data->nama_alternatif ?>" placeholder="">
                <?php echo form_error('nama_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    </form>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->