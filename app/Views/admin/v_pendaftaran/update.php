<div class="modal fade bd-example-modal-xl" id="modaledit" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubmenuModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Info/edit', ['class' => 'formedit']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <input type="text" name="id" id="id" value="<?= $ppbd_id; ?>" hidden>
                        <fieldset class="form-input">
                            <label for="nisn">NISN </label>
                            <input id="nisn" name="nisn" type="text" class="form-control required" value="<?= $nisn; ?>">
                            <div class="invalid-feedback errorNisn">
                            </div>

                            <label for="nama_lengkap">Nama Lengkap </label>
                            <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control required" value="<?= $nama_lengkap; ?>">

                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control required" value="<?= $tgl_lahir; ?>">

                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control required" value="<?= $tmp_lahir; ?>">

                            <label for="jenkel">Jenis Kelamin </label>
                            <select name="jenkel" id="jenkel" class="form-control required">
                                <option <?php if ($jenkel == "Laki-Laki") echo "selected"; ?> value="Laki-Laki">Laki-Laki</option>
                                <option <?php if ($jenkel == "Perempuan") echo "selected"; ?> value="Perempuan">Perempuan</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset class="form-input">
                            <label for="agama">Agama </label>
                            <select name="agama" id="agama" class="form-control required">
                                <option Disabled=true>Pilih</option>
                                <option <?php if ($agama == "Islam") echo "selected"; ?> value="Islam">Islam</option>
                                <option <?php if ($agama == "Kristen Protestan") echo "selected"; ?> value="Kristen Protestan">Kristen Protestan</option>
                                <option <?php if ($agama == "Katolik") echo "selected"; ?> value="Katolik">Katolik</option>
                                <option <?php if ($agama == "Hindu") echo "selected"; ?> value="Hindu">Hindu</option>
                                <option <?php if ($agama == "Buddha") echo "selected"; ?> value="Buddha">Buddha</option>
                                <option <?php if ($agama == "Kong Hu Cu") echo "selected"; ?> value="Kong Hu Cu">Kong Hu Cu</option>
                            </select>

                            <label for="nama_ayah">Nama Ayah </label>
                            <input id="nama_ayah" name="nama_ayah" type="text" class="form-control required" value="<?= $nama_ayah; ?>">

                            <label for="nama_ibu">Nama Ibu </label>
                            <input id="nama_ibu" name="nama_ibu" type="text" class="form-control required" value="<?= $nama_ibu; ?>">

                            <label for="alamat">Alamat</label>
                            <input id="alamat" name="alamat" type="text" class="form-control required" value="<?= $alamat; ?>">

                            <label for="jenis_tinggal">Jenis Tinggal </label>
                            <select name="jenis_tinggal" id="jenis_tinggal" class="form-control required">
                                <option disabled>Pilih</option>
                                <option <?php if ($jenis_tinggal == "Bersama Orangtua") echo "selected"; ?> value="Bersama Orangtua">Bersama Orangtua</option>
                                <option <?php if ($jenis_tinggal == "Bersama Saudara") echo "selected"; ?> value="Bersama Saudara">Bersama Saudara</option>
                                <option <?php if ($jenis_tinggal == "Kos") echo "selected"; ?> value="Kos">Kos</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <fieldset class="form-input">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input id="asal_sekolah" name="asal_sekolah" type="text" class="form-control required" value="<?= $asal_sekolah; ?>">

                            <label for="transportasi">Transportasi ke Sekolah </label>
                            <select name="transportasi" id="transportasi" class="form-control required">
                                <option Disabled=true>Pilih</option>
                                <option <?php if ($transportasi == "Mobil") echo "selected"; ?> value="Mobil">Mobil</option>
                                <option <?php if ($transportasi == "Motor") echo "selected"; ?> value="Motor">Motor</option>
                                <option <?php if ($transportasi == "Jalan Kaki") echo "selected"; ?> value="Jalan Kaki">Jalan Kaki</option>
                            </select>

                            <label for="no_telp">No telp / WA</label>
                            <input id="no_telp" name="no_telp" type="text" class="form-control required" value="<?= $no_telp; ?>">

                            <label for="jurusan">Jurusan </label>
                            <select name="jurusan" id="jurusan" class="form-control required">
                                <option Disabled=true>Pilih</option>
                                <option <?php if ($jurusan == "IPA") echo "selected"; ?> value="IPA">IPA</option>
                                <option <?php if ($jurusan == "IPS") echo "selected"; ?> value="IPS">IPS</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class=" modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btnsimpan"><i class="fa fa-share-square"></i> Update</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.formedit').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnsimpan').attr('disable', 'disable');
                    $('.btnsimpan').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...</i>');
                },
                complete: function() {
                    $('.btnsimpan').removeAttr('disable', 'disable');
                    $('.btnsimpan').html('<i class="fa fa-share-square"></i>  Update');
                },
                success: function(response) {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Data berhasil diubah !",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1250
                    }).then(function() {
                        location.reload();
                    });
                }
            });
        });
    });
</script>