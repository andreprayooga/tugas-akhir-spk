<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-4 text-gray-800">Update Data Nilai</h1>

    <div class="col-lg-5">
        <form action="<?php echo site_url('nilai/update'); ?>" method="post">
            <div class="form-group">
                <label for="total_nilai">Nama Kriteria</label>
                <input type="text" class="form-control" name="total_nilai" id="total_nilai" value="<?php echo $nilai->total_nilai; ?>" placeholder="Masukkan Nama Kriteria">
                <?php echo form_error('total_nilai', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
                <a href="<?php echo base_url('nilai'); ?>" class="btn btn-sm btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->