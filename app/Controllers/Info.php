<?php

namespace App\Controllers;

class Info extends BaseController
{
    public function index()
    {
        $pendaftar = $this->PendaftaranModel->join('status', 'status.status = pendaftaran.status')->get()->getResultArray();

        $data = [
            'title' => 'Administrator - SMA Kebangsaan',
            'head'  => 'Pendaftaran',
            'pendaftar' => $pendaftar
        ];
        return view('admin/v_pendaftaran/index', $data);
    }

    public function form_edit()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {

            $id = $request->getVar('id');
            $row = $this->PendaftaranModel->join('status', 'status.status = pendaftaran.status')->where('ppdb_id', $id)->get()->getRowArray();

            $data = [
                'ppbd_id' => $row['ppdb_id'],
                'id_user' => $row['id_user'],
                'nisn' => $row['nisn'],
                'nama_lengkap' => $row['nama_lengkap'],
                'tgl_lahir' => $row['tgl_lahir'],
                'tmp_lahir' => $row['tmp_lahir'],
                'jenkel' => $row['jenkel'],
                'asal_sekolah' => $row['asal_sekolah'],
                'nama_ayah' => $row['nama_ayah'],
                'nama_ibu' => $row['nama_ibu'],
                'alamat' => $row['alamat'],
                'no_telp' => $row['no_telp'],
                'jurusan' => $row['jurusan'],
                'tgl_daftar' => $row['tgl_daftar'],
                'agama' => $row['agama'],
                'jenis_tinggal' => $row['jenis_tinggal'],
                'transportasi' => $row['transportasi'],
                'status' => $row['keterangan'],
            ];

            $msg = [
                'sukses' => view('admin/v_pendaftaran/update', $data)
            ];

            echo json_encode($msg);
        } else {
            exit(view('error'));
        }
    }

    public function edit()
    {
        $request = \Config\Services::request();

        if ($request->isAJAX()) {
            $simpandata = [
                'nisn' => $request->getVar('nisn'),
                'nama_lengkap' => $request->getVar('nama_lengkap'),
                'tgl_lahir' => $request->getVar('tgl_lahir'),
                'tmp_lahir' => $request->getVar('tmp_lahir'),
                'jenkel' => $request->getVar('jenkel'),
                'asal_sekolah' => $request->getVar('asal_sekolah'),
                'nama_ayah' => $request->getVar('nama_ayah'),
                'nama_ibu' => $request->getVar('nama_ibu'),
                'alamat' => $request->getVar('alamat'),
                'no_telp' => $request->getVar('no_telp'),
                'jurusan' => $request->getVar('jurusan'),
                'agama' => $request->getVar('agama'),
                'jenis_tinggal' => $request->getVar('jenis_tinggal'),
                'transportasi' => $request->getVar('transportasi'),
            ];

            $id = $request->getVar('id');

            $this->PendaftaranModel->update($id, $simpandata);
            $msg = [
                'sukses' => 'Data berhasil diupdate'
            ];

            echo json_encode($msg);
        } else {
            exit(view('error'));
        }
    }

    public function show_detail()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {

            $id = $request->getVar('id');
            $row = $this->PendaftaranModel->join('status', 'status.status = pendaftaran.status')->where('ppdb_id', $id)->get()->getRowArray();

            $data = [
                'ppbd_id' => $row['ppdb_id'],
                'id_user' => $row['id_user'],
                'nisn' => $row['nisn'],
                'nama_lengkap' => $row['nama_lengkap'],
                'tgl_lahir' => $row['tgl_lahir'],
                'tmp_lahir' => $row['tmp_lahir'],
                'jenkel' => $row['jenkel'],
                'asal_sekolah' => $row['asal_sekolah'],
                'nama_ayah' => $row['nama_ayah'],
                'nama_ibu' => $row['nama_ibu'],
                'alamat' => $row['alamat'],
                'no_telp' => $row['no_telp'],
                'jurusan' => $row['jurusan'],
                'tgl_daftar' => $row['tgl_daftar'],
                'agama' => $row['agama'],
                'jenis_tinggal' => $row['jenis_tinggal'],
                'transportasi' => $row['transportasi'],
                'status' => $row['keterangan'],
            ];

            $msg = [
                'sukses' => view('admin/v_pendaftaran/detail', $data)
            ];

            echo json_encode($msg);
        } else {
            exit(view('error'));
        }
    }

    public function hapus()
    {
        $request = \Config\Services::request();

        if ($request->isAJAX()) {

            $id = $request->getVar('id');
            $this->PendaftaranModel->delete($id);

            $msg = [
                'sukses' => 'Data berhasil dihapus'
            ];

            echo json_encode($msg);
        }
    }
}
