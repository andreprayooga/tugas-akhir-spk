<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <?php echo $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg-4">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Insert Alternatif</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('alternatif/insert'); ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="kode_alternatif">Kode Alternatif</label>
                                <input type="text" class="form-control form-control-sm" id="kode_alternatif" name="kode_alternatif" value="<?php echo set_value('kode_alternatif'); ?>" placeholder="">
                                <?php echo form_error('kode_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="nama_alternatif">Nama Alternatif</label>
                                <input type="text" class="form-control form-control-sm" id="nama_alternatif" name="nama_alternatif" value="<?php echo set_value('nama_alternatif'); ?>" placeholder="">
                                <?php echo form_error('nama_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->