<?= $this->extend('siswa/v_layout/index'); ?>
<?= $this->section('content'); ?>

<div class="wizard-main">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title-wb">Pengumuman Pendaftaran Peserta Didik Baru</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            Status
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?= base_url('img/icon/qrcode.png'); ?>" alt="QRcode" class="img-thumbnail ml-5" width="400px">
                            </div>
                            <div class="col-lg-6">
                                <div class="container bg-light">
                                    <h4 class="text-center">PENGUMUMAN HASIL SELEKSI PSB SMA KEBANGSAAN 2021</h4>
                                    <div class="row mt-5">
                                        <div class="col-lg-4">
                                            <span>NISN</span>
                                        </div>
                                        <div class="col-lg-8">
                                            <span> : <?= $data['nisn']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <span>Nama Peserta</span>
                                        </div>
                                        <div class="col-lg-8">
                                            <span> : <?= $data['nama_lengkap']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <span>Tanggal Lahir</span>
                                        </div>
                                        <div class="col-lg-8">
                                            <span> : <?= $data['tgl_lahir']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <span>Jenis Kelamin</span>
                                        </div>
                                        <div class="col-lg-8">
                                            <span> : <?= $data['jenkel']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <span>Jurusan</span>
                                        </div>
                                        <div class="col-lg-8">
                                            <span> : <?= $data['jurusan']; ?></span>
                                        </div>
                                    </div>
                                    <?php if ($data['status'] == 1) : ?>
                                        <div class="mt-5">
                                            <p>Selamat anda dinyatakan Lulus seleksi PSB SMA Kebangsaan 2021.</p>
                                            <p>Persyaratan pendaftaran ulang calon siswa baru dapat dilihat <a href="">di sini.</a></p>
                                            <p>Anda dapat mencetak kembali Kartu Tanda Peserta PSB SMA Kebangsaan 2021 <a target="_blank" href="<?= base_url('Print'); ?>">di sini.</a></p>
                                        </div>
                                    <?php elseif ($data['status'] == -1) : ?>
                                        <div class="mt-5 text-center mb-5">
                                            <p>Mohon maaf anda dinyatakan Tidak Lulus dalam seleksi PSB SMA Kebangsaan 2021.</p>
                                            <h6>JANGAN PUTUS ASA DAN TETAP SEMANGAT!</h6>
                                        </div>
                                    <?php else : ?>
                                        <div class="mt-5 text-center mb-5">
                                            <p>Mohon menunggu dengan sabar, kami sedang malakukan peninjauan terhadap hasil seleksi.</p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="container d-flex justify-content-end">
                                    <a href="<?= base_url('Auth/logout'); ?>" style="color:inherit;"><i class="fa fa-fw fa-sign-out"></i></a>
                                    <a href="<?= base_url('Auth/logout'); ?>" style="color:inherit;">Keluar</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright text-center">All Rights Reserved. &copy; 2021 <a href="/">SMA Kebangsaan</a></p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>