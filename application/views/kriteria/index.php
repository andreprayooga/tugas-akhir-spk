<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-0">
            <div>
                <div class="float-left">
                    <h6 class="font-weight-bold text-primary my-3">Data Kriteria</h6>
                </div>

                <div class="float-right">
                    <a class="btn btn-sm btn-primary mt-2 mr-auto" href="">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kriteria</th>
                            <th>Tipe</th>
                            <th>Bobot</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value) : ?>
                            <tr>
                                <td><?php echo ++$key; ?></td>
                                <td><?php echo $value->nama_kriteria ?></td>
                                <td><?php echo $value->tipe ?></td>
                                <td><?php echo $value->bobot ?></td>
                                <td>
                                    <a href="<?= site_url("kriteria/update/" . $value->id_kriteria) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?= site_url("kriteria/delete/" . $value->id_kriteria) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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