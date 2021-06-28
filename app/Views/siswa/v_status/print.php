<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .text-center {
            text-align: center;
        }

        .mb-5 {
            margin-bottom: 50px;
        }

        .mt-5 {
            margin-top: 50px;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <title><?= $title; ?></title>
</head>

<body>
    <h3 class="text-center mb-5">PENGUMUMAN HASIL SELEKSI PSB SMA KEBANGSAAN 2021</h3>
    <table class="center">
        <tr>
            <td rowspan="5"><img src="data:image/png;base64,<?= base64_encode(file_get_contents(FCPATH . "img/icon/qrcode.png")); ?>" alt="QRcode" width="200px"></td>
            <td>NISN</td>
            <td>: <?= $data['nisn']; ?></td>
        </tr>
        <tr>
            <td>Nama Peserta</td>
            <td>: <?= $data['nama_lengkap']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>: <?= $data['tgl_lahir']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?= $data['jenkel']; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: <?= $data['jurusan']; ?></td>
        </tr>
    </table>
    <?php if ($data['status'] == 1) : ?>
        <div class="text-center mt-5">
            <p>Selamat anda dinyatakan Lulus seleksi PSB SMA Kebangsaan 2021.</p>
            <p>Persyaratan pendaftaran ulang calon siswa baru dapat dilihat <a href="">di sini.</a></p>
        </div>
    <?php elseif ($data['status'] == -1) : ?>
        <div class="text-center mt-5">
            <p>Mohon maaf anda dinyatakan Tidak Lulus dalam seleksi PSB SMA Kebangsaan 2021.</p>
            <h6>JANGAN PUTUS ASA DAN TETAP SEMANGAT!</h6>
        </div>
    <?php else : ?>
        <div class="text-center mt-5">
            <p>Mohon menunggu dengan sabar, kami sedang malakukan peninjauan terhadap hasil seleksi.</p>
        </div>
    <?php endif; ?>
</body>

</html>