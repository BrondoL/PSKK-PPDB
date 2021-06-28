<?= $this->extend('siswa/v_layout/index'); ?>
<?= $this->section('content'); ?>
<div class="wizard-main">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title-wb">Penerimaan Peserta Didik Baru</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="<?= base_url('assets/pendaftaran') ?>/images/bg2.png" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>PPDB <br> SMA Kebangsaan</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= base_url('assets/pendaftaran') ?>/images/slider-02.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>PPDB <br> SMA Kebangsaan</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="<?= base_url('assets/pendaftaran') ?>/images/slider-03.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>PPDB <br> SMA Kebangsaan</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 login-sec">
                <div class="login-sec-bg">
                    <h2 class="text-center">Account Information</h2>
                    <form id="example-advanced-form" action="<?= base_url('Daftar/simpan') ?>" class="formtambah" style="display: none;">
                        <?= csrf_field(); ?>
                        <h3>Profile</h3>
                        <fieldset class="form-input">
                            <h4>Profile Information</h4>
                            <label for="nisn">NISN *</label>
                            <input id="nisn" name="nisn" type="text" class="form-control required">
                            <div class="invalid-feedback errorNisn">
                            </div>

                            <label for="nama_lengkap">Nama Lengkap *</label>
                            <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control required">

                            <label for="tgl_lahir">Tanggal Lahir*</label>
                            <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control required">

                            <label for="tmp_lahir">Tempat Lahir*</label>
                            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control required">

                            <label for="jenkel">Jenis Kelamin *</label>
                            <select name="jenkel" id="jenkel" class="form-control required">
                                <option Disabled=true Selected=true>Pilih</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select> <br>

                        </fieldset>

                        <h3>Detail</h3>
                        <fieldset class="form-input">
                            <h4>Detail Information</h4>
                            <label for="agama">Agama *</label>
                            <select name="agama" id="agama" class="form-control required">
                                <option Disabled=true Selected=true>Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                            </select>

                            <label for="nama_ayah">Nama Ayah *</label>
                            <input id="nama_ayah" name="nama_ayah" type="text" class="form-control required">

                            <label for="nama_ibu">Nama Ibu *</label>
                            <input id="nama_ibu" name="nama_ibu" type="text" class="form-control required">

                            <label for="alamat">Alamat*</label>
                            <input id="alamat" name="alamat" type="text" class="form-control required">

                            <label for="jenis_tinggal">Jenis Tinggal *</label>
                            <select name="jenis_tinggal" id="jenis_tinggal" class="form-control required">
                                <option disabled selected>Pilih</option>
                                <option value="Bersama Orangtua">Bersama Orangtua</option>
                                <option value="Bersama Saudara">Bersama Saudara</option>
                                <option value="Kos">Kos</option>
                            </select>

                        </fieldset>

                        <h3>Finish</h3>
                        <fieldset class="form-input">
                            <small class="text-danger">Sebelum klik Finish, pastikan semua data anda sudah benar!</small><br><br>

                            <label for="asal_sekolah">Asal Sekolah*</label>
                            <input id="asal_sekolah" name="asal_sekolah" type="text" class="form-control required">

                            <label for="transportasi">Transportasi ke Sekolah *</label>
                            <select name="transportasi" id="transportasi" class="form-control required">
                                <option Disabled=true Selected=true>Pilih</option>
                                <option value="Mobil">Mobil</option>
                                <option value="Motor">Motor</option>
                                <option value="Jalan Kaki">Jalan Kaki</option>
                            </select><br>

                            <label for="no_telp">No telp / WA*</label>
                            <input id="no_telp" name="no_telp" type="text" class="form-control required">

                            <label for="jurusan">Jurusan *</label>
                            <select name="jurusan" id="jurusan" class="form-control required">
                                <option Disabled=true Selected=true>Pilih</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                            </select><br>
                            <label>Terms and Conditions</label><br>
                            <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                        </fieldset>
                    </form>
                    <div class="container position-absolute">
                        <a href="<?= base_url('Auth/logout'); ?>" style="color:inherit;"><i class="fa fa-fw fa-sign-out"></i></a>
                        <a href="<?= base_url('Auth/logout'); ?>" style="color:inherit;">Keluar</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright text-center">All Rights Reserved. &copy; 2021 <a href="">SMA Kebangsaan</a></p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('myscript'); ?>
<script>
    const date = '<?= date('Y-m-d') ?>'

    var form = $("#example-advanced-form").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: '<?= base_url('Daftar/simpan') ?>',
                data: {
                    nisn: $('input#nisn').val(),
                    nama_lengkap: $('input#nama_lengkap').val(),
                    tgl_lahir: $('input#tgl_lahir').val(),
                    tmp_lahir: $('input#tmp_lahir').val(),
                    jenkel: $('select#jenkel').val(),
                    agama: $('select#agama').val(),
                    nama_ayah: $('input#nama_ayah').val(),
                    nama_ibu: $('input#nama_ibu').val(),
                    alamat: $('input#alamat').val(),
                    jenis_tinggal: $('select#jenis_tinggal').val(),
                    asal_sekolah: $('input#asal_sekolah').val(),
                    transportasi: $('select#transportasi').val(),
                    no_telp: $('input#no_telp').val(),
                    jurusan: $('select#jurusan').val(),
                    tgl_daftar: date,
                    status: 0
                },
                dataType: "json",
                success: function(response) {
                    if (response.error) {
                        if (response.error.nisn) {
                            $('#nisn').addClass('is-invalid');
                            $('.errorNisn').html(response.error.nisn);
                        } else {
                            $('#nisn').removeClass('is-invalid');
                            $('.errorNisn').html('');
                        }
                    } else {
                        Swal.fire({
                            title: "Berhasil!",
                            text: response.sukses,
                            icon: "success",
                            showConfirmButton: false,
                            timer: 2500
                        }).then(function() {
                            window.location = '<?= base_url('Pengumuman'); ?>';
                        });
                        console.log(response);
                    }
                }
            });
        }

    }).validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
</script>
<?= $this->endSection(); ?>