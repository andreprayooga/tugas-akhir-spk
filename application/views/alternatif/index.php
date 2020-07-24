<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <?php if ($this->session->userdata('fk_id_level') == '1') : ?>
                    <button type="button" data-target="#modal_form" onclick="tambah_alternatif()" class="btn btn-sm btn-primary mb-2 mr-auto">Tambah Data Alternatif</button>
                    <div class="float-right">
                        <a class="btn btn-sm btn-success mb-2 mr-auto" href="#"><i class="fa fa-file-excel"></i> Export Excel</a>
                        <a class="btn btn-sm btn-danger mb-2 mr-auto" href="#"><i class="fa fa-file-pdf"></i> Export PDF</a>
                    </div>
                <?php endif; ?>
                <table class="table table-bordered table-hover table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Alternatif</th>
                            <?php if ($this->session->userdata('fk_id_level') == '1') : ?>
                                <th>Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($nama_alternatif as $key => $value) : ?>
                            <tr>
                                <td><?= ++$key; ?></td>
                                <td><?= $value->nama_warga ?></td>
                                <?php if ($this->session->userdata('fk_id_level') == '1') : ?>
                                    <td>
                                        <button onclick="detail_alternatif(<?php echo $value->id_alternatif; ?>)" class="btn btn-sm btn-info"><i class="fa fa-info-circle"></i></button>
                                        <button onclick="delete_alternatif(<?php echo $value->id_alternatif; ?>)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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

<script type="text/javascript">
    var save_method;
    var table;

    $(function() {
        $("#DataTable").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false

        });
        $('#DataTable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    $(document).ready(function() {
        var dataString = $("#form").serialize();
        var url = "alternatif/insert_data"
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(''); ?>" + url,
            data: dataString,
            success: function($data) {
                alert($data);
            }
        });
    })

    function tambah_alternatif() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function save() {

        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('alternatif/insert_alternatif'); ?>";
        } else {
            url = "<?php echo site_url('alternatif/update_alternatif'); ?>";
        }

        // ajax adding data to database
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    $('#modal_form').modal('hide');
                    location.reload(); // for reload a page
                    toastr.success('Item Created Successfully.', 'Success Alert', {
                        timeOut: 5000
                    });
                }

                $('#btnSave').text('Save changes'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Data gagal ditambahkan!');
                $('#btnSave').text('Save changes'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 
            }
        });
    }

    function delete_alternatif(id_alternatif) {
        if (confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url: "<?php echo site_url('alternatif/delete_alternatif') ?>/" + id_alternatif,
                type: "POST",
                dataType: "JSON",
                success: function(data) {

                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });

        }
    }
</script>

<!-- Modal -->
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alternatif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <?php echo validation_errors(); ?>
                <form action="" id="form">
                    <input type="hidden" name="id_alternatif" />
                    <div class="form-group">
                        <label for="fk_id_warga">Nama Alternatif</label>
                        <select class="form-control" id="fk_id_warga" name="fk_id_warga">
                            <option selected>Pilih Nama</option>
                            <?php foreach ($this->db->get('tb_warga')->result_array() as $num => $value) : ?>
                                <option value="<?php echo $value['id_warga'] ?>"><?php echo $value['nama_warga']; ?></option>
                            <?php endforeach; ?>
                            <?php echo form_error('fk_id_warga','<small class="text-danger pl-3">','</small>' ); ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</script>