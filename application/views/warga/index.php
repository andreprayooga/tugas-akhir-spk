<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <?php if ($this->session->userdata('fk_id_level') == '1') : ?>
                    <a href="<?php echo site_url('warga/insert'); ?>" class="btn btn-sm btn-primary mb-2 mr-auto">Tambah Data Warga</a>
                    <div class="float-right">
                        <!-- <a class="btn btn-sm btn-success mb-2 mr-auto" href="<?php echo base_url('kriteria/export_excel'); ?>"><i class="fa fa-file-excel"></i> Export Excel</a>
                        <a class="btn btn-sm btn-danger mb-2 mr-auto" href="<?php echo base_url('kriteria/export_pdf'); ?>"><i class="fa fa-file-pdf"></i> Export PDF</a> -->
                    </div>
                <?php endif; ?>
                <table class="table table-bordered table-hover table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIK</th>
                            <th>Nama Warga</th>
                            <?php if ($this->session->userdata('fk_id_level') == '1') : ?>
                                <th>Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_warga as $key => $value) : ?>
                            <tr>
                                <td><?php echo ++$key; ?></td>
                                <td><?php echo $value->nik ?></td>
                                <td><?php echo $value->nama_warga ?></td>
                                <?php if ($this->session->userdata('fk_id_level') == '1') : ?>
                                    <td>
                                        <a href="<?php echo site_url('warga/detail' . $value->id_warga); ?>" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i></a>
                                        <a href="<?php echo site_url('warga/update' . $value->id_warga); ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                        <a href="<?php echo site_url('warga/delete' . $value->id_warga); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->