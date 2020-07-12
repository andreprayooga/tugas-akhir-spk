<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-0">
            <div>
                <div class="float-left">
                    <h6 class="font-weight-bold text-primary my-3">Data Nilai Alternatif</h6>
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
                            <th>No</th>
                            <th>Nama Alternatif</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php if (!empty($nilai)) {
                            $i = 1;
                            foreach ($nilai as $val) { ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td>
                                        <?php foreach ($alternatif as $value) {
                                            if ($value->id_alternatif == $val->fk_id_alternatif) { ?>
                                        <?php echo $value->nama_alternatif;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="<?= site_url('nilai/detail_nilai/') . $val->fk_id_alternatif ?>" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i></a>
                                        <a href="<?= site_url('nilai/delete_alternatif/') . $val->fk_id_alternatif ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
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