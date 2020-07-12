<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-0">
            <div>
                <div class="float-left">
                    <h6 class="font-weight-bold text-primary my-3">Data Alternatif</h6>
                </div>

                <div class="float-right">
                    <a class="btn btn-sm btn-primary mt-2 mr-auto" href="<?php echo base_url('Alternatif/insert'); ?>">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Alternatif</th>
                            <th>Nama Alternatif</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_alternatif as $key => $value) : ?>
                            <tr>
                                <td><?= ++$key; ?></td>
                                <td><?= $value->kode_alternatif ?></td>
                                <td><?= $value->nama_alternatif ?></td>
                                <td>
                                    <a href="<?= site_url("Alternatif/detail/" . $value->id_alternatif) ?>" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i></a>
                                    <a href="<?= site_url("Alternatif/update/" . $value->id_alternatif) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?= site_url("Alternatif/delete/" . $value->id_alternatif) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
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