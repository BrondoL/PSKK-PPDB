<div class="modal fade bd-example-modal-xl" id="modaldetail" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalLabel">Detail Data Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <fieldset class="form-input">
                            <label for="nisn">NISN </label>
                            <input id="nisn" name="nisn" type="text" class="form-control required" value="<?= $nisn; ?>" readonly>
                            <div class="invalid-feedback errorNisn">
                            </div>

                            <label for="nama_lengkap">Nama Lengkap </label>
                            <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control required" value="<?= $nama_lengkap; ?>" readonly>

                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control required" value="<?= $tgl_lahir; ?>" readonly>

                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control required" value="<?= $tmp_lahir; ?>" readonly>

                            <label for="alamat">Jenis Kelamin</label>
                            <input id="alamat" name="alamat" type="text" class="form-control required" value="<?= $jenkel; ?>" readonly>

                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset class="form-input">
                            <label for="alamat">Agama</label>
                            <input id="alamat" name="alamat" type="text" class="form-control required" value="<?= $agama; ?>" readonly>

                            <label for="nama_ayah">Nama Ayah </label>
                            <input id="nama_ayah" name="nama_ayah" type="text" class="form-control required" value="<?= $nama_ayah; ?>" readonly>

                            <label for="nama_ibu">Nama Ibu </label>
                            <input id="nama_ibu" name="nama_ibu" type="text" class="form-control required" value="<?= $nama_ibu; ?>" readonly>

                            <label for="alamat">Alamat</label>
                            <input id="alamat" name="alamat" type="text" class="form-control required" value="<?= $alamat; ?>" readonly>

                            <label for="alamat">Jenis Tinggal</label>
                            <input id="alamat" name="alamat" type="text" class="form-control required" value="<?= $jenis_tinggal; ?>" readonly>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset class="form-input">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input id="asal_sekolah" name="asal_sekolah" type="text" class="form-control required" value="<?= $asal_sekolah; ?>" readonly>

                            <label for="alamat">Transportasi Ke Sekolah</label>
                            <input id="alamat" name="alamat" type="text" class="form-control required" value="<?= $transportasi; ?>" readonly>

                            <label for="no_telp">No telp / WA</label>
                            <input id="no_telp" name="no_telp" type="text" class="form-control required" value="<?= $no_telp; ?>" readonly>

                            <label for="alamat">Jurusan</label>
                            <input id="alamat" name="alamat" type="text" class="form-control required" value="<?= $jurusan; ?>" readonly>

                            <label for="no_telp">Status</label>
                            <input id="no_telp" name="no_telp" type="text" class="form-control required" value="<?= $status; ?>" readonly>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>