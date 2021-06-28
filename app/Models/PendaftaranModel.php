<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table      = 'pendaftaran';
    protected $primaryKey = 'ppdb_id';
    protected $allowedFields = [
        'id_user',
        'nisn',
        'nama_lengkap',
        'tgl_lahir',
        'tmp_lahir',
        'jenkel',
        'asal_sekolah',
        'nama_ayah',
        'nama_ibu',
        'alamat',
        'no_telp',
        'jurusan',
        'tgl_daftar',
        'agama',
        'jenis_tinggal',
        'transportasi',
        'status'
    ];
}
