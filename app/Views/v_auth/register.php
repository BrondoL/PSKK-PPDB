<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $title ?></title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="<?= base_url('img/icon/j.png') ?>">

    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card card-pages shadow-none">

            <div class="card-body">
                <div class="text-center m-t-0 m-b-15">
                    <img src="<?= base_url('img/icon/j.png') ?>" alt="Logo" height="35">
                </div>
                <h5 class="font-18 text-center">Halaman Register - SMA Kebangsaan</h5>
                <hr>
                <?= form_open('Auth/simpan', ['class' => 'formregister']) ?>
                <?= csrf_field() ?>

                <div class="form-group">
                    <div class="col-12">
                        <label>Nama</label>
                        <input class="form-control" name="nama" id="nama" type="text">
                        <div class="invalid-feedback errorNama">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>Email</label>
                        <input class="form-control" name="email" id="email" type="email">
                        <div class="invalid-feedback errorEmail">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>Username</label>
                        <input class="form-control" name="username" id="username" type="text">
                        <div class="invalid-feedback errorUsername">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>Password</label>
                        <input class="form-control" name="password" id="password" type="password">
                        <div class="invalid-feedback errorPassword">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>Confirm Password</label>
                        <input class="form-control" name="password2" id="password2" type="password">
                        <div class="invalid-feedback errorPassword2">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <a href="<?= base_url('Login'); ?>">Sudah punya akun ?</a>
                    </div>
                </div>

                <div class="form-group text-center m-t-20">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg waves-effect waves-light btgregister" type="submit">Register</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>

        </div>
    </div>
    <!-- END wrapper -->
    <!-- Sweet-Alert  -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- jQuery  -->
    <script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.slimscroll.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>/assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            $('.formregister').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    beforeSend: function() {
                        $('.btgregister').prop('disable', true);
                        $('.btgregister').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <i>Loading...')
                    },
                    complete: function() {
                        $('.btgregister').prop('disable', false);
                        $('.btgregister').html('Register')
                    },
                    success: function(response) {
                        if (response.error) {
                            if (response.error.username) {
                                $('#username').addClass('is-invalid');
                                $('.errorUsername').html(response.error.username);
                            } else {
                                $('#username').removeClass('is-invalid');
                                $('.errorUsername').html('');
                            }
                            if (response.error.email) {
                                $('#email').addClass('is-invalid');
                                $('.errorEmail').html(response.error.email);
                            } else {
                                $('#email').removeClass('is-invalid');
                                $('.errorEmail').html('');
                            }
                            if (response.error.nama) {
                                $('#nama').addClass('is-invalid');
                                $('.errorNama').html(response.error.nama);
                            } else {
                                $('#nama').removeClass('is-invalid');
                                $('.errorNama').html('');
                            }
                            if (response.error.password) {
                                $('#password').addClass('is-invalid');
                                $('.errorPassword').html(response.error.password);
                            } else {
                                $('#password').removeClass('is-invalid');
                                $('.errorPassword').html('');
                            }
                            if (response.error.password2) {
                                $('#password2').addClass('is-invalid');
                                $('.errorPassword2').html(response.error.password2);
                            } else {
                                $('#password2').removeClass('is-invalid');
                                $('.errorPassword2').html('');
                            }
                        } else {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.sukses.msg,
                                icon: "success",
                                showConfirmButton: false,
                                timer: 1250
                            }).then(function() {
                                window.location = response.sukses.link;
                            });
                        }
                    }
                });
                return false;
            });
        });
    </script>
</body>

</html>