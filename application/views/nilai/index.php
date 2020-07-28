<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
            <?php if($this->session->userdata('fk_id_level')=='1') : ?>
                <a class="btn btn-sm btn-primary mb-2 mr-auto" href="<?php echo base_url('nilai/insert'); ?>">Tambah Data Nilai</a>
                <div class="float-right">
                    <a class="btn btn-sm btn-success mb-2 mr-auto" href="#"><i class="fa fa-file-excel"></i> Export Excel</a>
                    <a class="btn btn-sm btn-danger mb-2 mr-auto" href="#"><i class="fa fa-file-pdf"></i> Export PDF</a>
                </div>
                <?php endif; ?>
                <table class="table table-bordered table-hover table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Warga</th>
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
                                        <?php foreach ($data_warga as $value) {
                                            if ($value->id_warga == $val->fk_id_warga) { ?>
                                        <?php echo $value->nama_warga;
                                            }
                                        }
                                        ?>
                                    </td>
                                   
                                    <td>
                                        <a href="<?= site_url('nilai/detail_nilai/') . $val->fk_id_warga ?>" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i></a>
                                        <?php if($this->session->userdata('fk_id_level')=='1') : ?>
                                        <a href="<?= site_url('nilai/delete_alternatif/') . $val->fk_id_warga ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        <?php endif; ?>
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