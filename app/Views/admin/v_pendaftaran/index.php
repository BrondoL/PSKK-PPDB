<?= $this->extend('admin/v_layout/index'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th class="align-middle">No</th>
                            <th class="align-middle">NISN</th>
                            <th class="align-middle">Nama</th>
                            <th class="align-middle">Status</th>
                            <th class="align-middle">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($pendaftar as $p) : ?>
                            <?php if ($p['status'] == 0) {
                                $color = "text-warning";
                            } elseif ($p['status'] == 1) {
                                $color = "text-success";
                            } else {
                                $color = "text-danger";
                            }
                            ?>
                            <tr class="text-center">
                                <td class="align-middle"><?= $nomor++; ?></td>
                                <td class="align-middle"><?= $p['nisn']; ?></td>
                                <td class="align-middle"><?= $p['nama_lengkap']; ?></td>
                                <td class="align-middle">
                                    <span class="<?= $color; ?>">
                                        <u><?= $p['keterangan']; ?></u>
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-success btn-sm" onclick="detail(<?= $p['ppdb_id']; ?>)"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-warning btn-sm" onclick="edit(<?= $p['ppdb_id']; ?>)"><i class="fa fa-tags"></i></button>
                                    <button class="btn btn-danger btn-sm" onclick="hapus(<?= $p['ppdb_id']; ?>)"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="viewmodal"></div>
<?= $this->endSection(); ?>

<?= $this->section('myscript'); ?>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "columnDefs": [{
                "targets": [1, 4],
                "orderable": false,
            }]
        });
    });

    function detail(id) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('Info/show_detail'); ?>",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaldetail').modal('show');
                }
            }
        });
    }

    function edit(id) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('Info/form_edit'); ?>",
            data: {
                id: id
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaledit').modal('show');
                }
            }
        });
    }

    function hapus(id) {
        Swal.fire({
            title: 'Hapus data?',
            text: `Apakah anda yakin menghapus data?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('Info/hapus') ?>",
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id
                    },
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.sukses,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            });
                            location.reload();
                        }
                    }
                });
            }
        })
    }
</script>

<?= $this->endSection(); ?>