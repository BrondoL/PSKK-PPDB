<div class="modal fade" id="modaldetail" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalLabel">Detail User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center class="mb-3">
                    <img class="img-thumbnail img-preview" width="50%" src="<?= base_url('img/user') . '/' . $foto; ?>" alt="Foto Pegawai">
                </center>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $username; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $email; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Last Login</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" placeholder="<?= $last_login; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>