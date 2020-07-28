<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Menentukan Nilai Alternatif</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped table-sm display" id="table1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Alternatif</th>
                            <th>Nama Kriteria</th>
                            <th>Total Nilai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($nilai as $value) { ?>
                            <tr>
                                <td><?php echo $value->nama_warga; ?></td>
                                <td><?php echo $value->nama_kriteria; ?></td>
                                <td><?php echo $value->total_nilai; ?></td>
                                <td>
                                    <a href="<?= site_url('nilai/update/') . $value->fk_id_warga ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->