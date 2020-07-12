<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <?php echo $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-lg-6">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Insert Alternatif</h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('Alternatif/insert'); ?>" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kode_alternatif">Kode Alternatif</label>
                                <input type="text" class="form-control" id="kode_alternatif" name="kode_alternatif" placeholder="Masukkan Kode Alternatif" value="<?php echo set_value('kode_alternatif') ?>">
                                <?php echo form_error('kode_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nama_alternatif">Nama Alternatif</label>
                                <input type="text" class="form-control" id="nama_alternatif" name="nama_alternatif" placeholder="Masukkan Nama Alternatif" value="<?php echo set_value('nama_alternatif') ?>">
                                <?php echo form_error('nama_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-md-6">
                                <button class="btn btn-primary btn-sm btn-icon-split" type="submit">
                                    <span class="icon text-white-50"><i class="fas fa-save"></i></span>
                                    <span class="text">Save</span>
                                </button>
                                <a class="btn btn-secondary btn-sm btn-icon-split" href="#">
                                    <span class="icon text-white-50"><i class="fas fa-share-square"></i></span>
                                    <span class="text">Cancel</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->