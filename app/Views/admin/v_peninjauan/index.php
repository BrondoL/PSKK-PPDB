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
                            <th class="align-middle">Tanggal Daftar</th>
                            <th class="align-middle">Validasi</th>
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
                                <td class="align-middle"><?= $p['tgl_daftar']; ?></td>
                                <td class="align-middle">
                                    <button class="btn btn<?php if ($p['status'] != -1) echo "-outline"; ?>-danger btn-sm" onclick="failed(<?= $p['ppdb_id']; ?>)"><i class="fa fa-times"></i></button>
                                    <button class="btn btn<?php if ($p['status'] != 0) echo "-outline"; ?>-warning btn-sm" onclick="review(<?= $p['ppdb_id']; ?>)"><i class="fa fa-exclamation"></i></button>
                                    <button class="btn btn<?php if ($p['status'] != 1) echo "-outline"; ?>-success btn-sm" onclick="pass(<?= $p['ppdb_id']; ?>)"><i class="fa fa-check"></i></button>
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

    function failed(id) {
        Swal.fire({
            title: 'Peserta Gagal?',
            icon: 'error',
            showCancelButton: true,
            confirmButtonColor: '#e74a3b',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('Peninjauan/validasi') ?>",
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id,
                        status: -1
                    },
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.sukses,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            });
                        }
                    }
                });
            }
        })
    }

    function review(id) {
        Swal.fire({
            title: 'Peserta Dalam Tinjauan?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f6c23e',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('Peninjauan/validasi') ?>",
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id,
                        status: 0
                    },
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.sukses,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            });
                        }
                    }
                });
            }
        })
    }

    function pass(id) {
        Swal.fire({
            title: 'Peserta Lulus?',
            icon: 'success',
            showCancelButton: true,
            confirmButtonColor: '#1cc88a',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('Peninjauan/validasi') ?>",
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id,
                        status: 1
                    },
                    success: function(response) {
                        if (response.sukses) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.sukses,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                location.reload();
                            });
                        }
                    }
                });
            }
        })
    }
</script>

<?= $this->endSection(); ?>