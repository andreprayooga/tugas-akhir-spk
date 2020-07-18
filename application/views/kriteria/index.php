<!-- Begin Page Content -->
<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <?php if ($this->session->userdata('fk_id_level') == '1') : ?>
                    <button type="button" data-toggle="modal" data-target="#modal_form" onclick="tambah_kriteria()" class="btn btn-sm btn-primary mb-2 mr-auto">Tambah Data Kriteria</button>
                    <div class="float-right">
                        <a class="btn btn-sm btn-success mb-2 mr-auto" href="<?php echo base_url('kriteria/export_excel'); ?>"><i class="fa fa-file-excel"></i> Export Excel</a>
                        <a class="btn btn-sm btn-danger mb-2 mr-auto" href="<?php echo base_url('kriteria/export_pdf'); ?>"><i class="fa fa-file-pdf"></i> Export PDF</a>
                    </div>
                <?php endif; ?>
                <table class="table table-bordered table-hover table-sm" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kriteria</th>
                            <th>Tipe</th>
                            <th>Bobot</th>
                            <?php if ($this->session->userdata('fk_id_level') == '1') : ?>
                                <th>Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value) : ?>
                            <tr>
                                <td><?php echo ++$key; ?></td>
                                <td><?php echo $value->nama_kriteria ?></td>
                                <td><?php echo $value->tipe == 0 ? "Cost" : "Benefit" ?></td>
                                <td><?php echo $value->bobot ?></td>
                                <?php if ($this->session->userdata('fk_id_level') == '1') : ?>
                                    <td>
                                        <button onclick="edit_kriteria(<?php echo $value->id_kriteria; ?>)" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></button>
                                        <button onclick="delete_kriteria(<?php echo $value->id_kriteria; ?>)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
        var url = "Kriteria/insert_data"
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(''); ?>" + url,
            data: dataString,
            success: function($data) {
                alert($data);
            }
        });
    })

    function tambah_kriteria() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_kriteria(id_kriteria) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('kriteria/edit_kriteria') ?>/"+ id_kriteria,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id_kriteria"]').val(data.id_kriteria);
                $('[name="nama_kriteria"]').val(data.nama_kriteria);
                $('[name="tipe"]').val(data.tipe);
                $('[name="bobot"]').val(data.bobot);

                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Update Kriteria'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Data Error!');
            }
        });
    }

    function save() {

        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('kriteria/insert_kriteria'); ?>";
        } else {
            url = "<?php echo site_url('kriteria/update_kriteria'); ?>";
        }

        // ajax adding data to database
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data) {
                if (data.status) {
                    toastr.success('Item Created Successfully.', 'Success Alert', {
                        timeOut: 5000
                    });
                    //if success close modal and reload ajax table
                    $('#modal_form').modal('hide');
                    location.reload(); // for reload a page
                }

                $('#btnSave').text('Save changes'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Data gagal ditambahkan / diupdate');
                $('#btnSave').text('Save changes'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 
            }
        });
    }

    function delete_kriteria(id_kriteria) {
        if (confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url: "<?php echo site_url('kriteria/delete_kriteria') ?>/" + id_kriteria,
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="" id="form">
                    <input type="hidden" name="id_kriteria" />
                    <div class="form-group">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <input type="text" class="form-control" name="nama_kriteria" placeholder="Masukkan Nama Kriteria">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tipe">Tipe</label>
                            <select class="form-control" name="tipe">
                                <option value="0">Cost</option>
                                <option value="1">Benefit</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="bobot">Bobot</label>
                            <input type="text" class="form-control" name="bobot" placeholder="Bobot Kriteria">
                        </div>
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