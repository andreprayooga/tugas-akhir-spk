<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
            <?php if($this->session->userdata('fk_id_level')=='1') : ?>
                <a class="btn btn-sm btn-primary mb-2 mr-auto" href="<?php echo base_url('alternatif/insert'); ?>"><i class="fa fa-plus-square"></i> Tambah Data</a>
                <div class="float-right">
                    <a class="btn btn-sm btn-success mb-2 mr-auto" href="#"><i class="fa fa-file-excel"></i> Export Excel</a>
                    <a class="btn btn-sm btn-danger mb-2 mr-auto" href="#"><i class="fa fa-file-pdf"></i> Export PDF</a>
                    <a class="btn btn-sm btn-warning mb-2 mr-auto" href="#"><i class="fa fa-print"></i> Print</a>
                </div>
                <?php endif; ?>
                <table class="table table-bordered table-hover table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            <?php if($this->session->userdata('fk_id_level')=='1') : ?>
                            <th>Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_alternatif as $key => $value) : ?>
                            <tr>
                                <td><?= ++$key; ?></td>
                                <td><?= $value->kode_alternatif ?></td>
                                <td><?= $value->nama_alternatif ?></td>
                                <?php if($this->session->userdata('fk_id_level')=='1') : ?>
                                <td>
                                    <a href="<?= site_url("alternatif/detail/" . $value->id_alternatif) ?>" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i></a>
                                    <a href="<?= site_url("alternatif/update/" . $value->id_alternatif) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?= site_url("alternatif/delete/" . $value->id_alternatif) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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