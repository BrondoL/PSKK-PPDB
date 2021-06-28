<?php

namespace App\Controllers;

class Peninjauan extends BaseController
{
    public function index()
    {
        $pendaftar = $this->PendaftaranModel->join('status', 'status.status = pendaftaran.status')->get()->getResultArray();

        $data = [
            'title' => 'Administrator - SMA Kebangsaan',
            'head'  => 'Peninjauan',
            'pendaftar' => $pendaftar
        ];
        return view('admin/v_peninjauan/index', $data);
    }

    public function validasi()
    {
        $request = \Config\Services::request();

        if ($request->isAJAX()) {

            $id = $request->getVar('id');

            $data = [
                'status' => $request->getVar('status')
            ];

            $this->PendaftaranModel->update($id, $data);

            $msg = [
                'sukses' => 'Validasi Berhasil'
            ];

            echo json_encode($msg);
        }
    }
}
