<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped table-sm" id="dataTable" width="250%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Alternatif</th>
                            <th>Status Bangunan Tinggal</th>
                            <th>Status Lahan Tinggal</th>
                            <th>Jenis Lantai Terluas</th>
                            <th>Jenis Dinding</th>
                            <th>Kondisi Dinding</th>
                            <th>Jenis Atap</th>
                            <th>Kondisi Atap</th>
                            <th>Sumber Air Minum</th>
                            <th>Sumber Penerangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_alternatif as $key => $value) : ?>
                            <tr>
                                <td><?php echo $key; ?></td>
                                <td><?php echo $value->nama_alternatif ?></td>
                                <td><?php echo $value->status_bangunan_tinggal ?></td>
                                <td><?php echo $value->status_lahan_tinggal ?></td>
                                <td><?php echo $value->jenis_lantai_terluas ?></td>
                                <td><?php echo $value->jenis_dinding ?></td>
                                <td><?php echo $value->kondisi_dinding ?></td>
                                <td><?php echo $value->jenis_atap ?></td>
                                <td><?php echo $value->kondisi_atap ?></td>
                                <td><?php echo $value->sumber_air_minum ?></td>
                                <td><?php echo $value->sumber_penerangan ?></td>
                                <td>
                                    <a href="<?= site_url("Alternatif/update/" . $value->id_warga) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
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