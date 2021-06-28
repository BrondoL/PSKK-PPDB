<?php

namespace App\Controllers;

use Dompdf\Dompdf;

class Daftar extends BaseController
{
    public function index()
    {
        $cek = $this->PendaftaranModel->where("id_user", $this->session->get('id_user'))->countAllResults();
        if ($cek != 0) {
            return redirect()->to(base_url('Pengumuman'));
        }
        $data = [
            'title' => 'Pendaftaran - SMA Kebangsaan'
        ];
        return view('siswa/v_daftar/index', $data);
    }

    public function simpan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nisn' => [
                    'label' => 'Nisn',
                    'rules' => 'required|is_unique[pendaftaran.nisn]|min_length[5]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'is_unique' => '{field} sudah tersedia.',
                        'min_length' => '{field} minimal 5',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nisn' => $validation->getError('nisn'),
                    ]
                ];
            } else {
                $simpandata = [
                    'nisn' => $this->request->getVar('nisn'),
                    'id_user' => $this->session->get('id_user'),
                    'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                    'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                    'tmp_lahir' => $this->request->getVar('tmp_lahir'),
                    'jenkel' => $this->request->getVar('jenkel'),
                    'agama' => $this->request->getVar('agama'),
                    'nama_ayah' => $this->request->getVar('nama_ayah'),
                    'nama_ibu' => $this->request->getVar('nama_ibu'),
                    'alamat' => $this->request->getVar('alamat'),
                    'jenis_tinggal' => $this->request->getVar('jenis_tinggal'),
                    'asal_sekolah' => $this->request->getVar('asal_sekolah'),
                    'transportasi' => $this->request->getVar('transportasi'),
                    'no_telp' => $this->request->getVar('no_telp'),
                    'jurusan' => $this->request->getVar('jurusan'),
                    'tgl_daftar' => $this->request->getVar('tgl_daftar'),
                    'status' => $this->request->getVar('status'),
                ];

                $this->PendaftaranModel->insert($simpandata);
                session()->setFlashdata('pesan', 'Jangan lupa mengganti password!');
                $msg = [
                    'sukses' => 'Data berhasil dikirim!'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function status()
    {
        $cek = $this->PendaftaranModel->where("id_user", $this->session->get('id_user'))->countAllResults();
        if ($cek == 0) {
            return redirect()->to(base_url('Pendaftaran'));
        }
        $status = $this->PendaftaranModel->join('status', 'status.status = pendaftaran.status')->where("id_user", $this->session->get('id_user'))->get()->getRowArray();

        $data = [
            'title' => 'Pengumuman - SMA Kebangsaan',
            'data' => $status
        ];
        return view('siswa/v_status/index', $data);
    }

    public function print()
    {
        $status = $this->PendaftaranModel->join('status', 'status.status = pendaftaran.status')->where("id_user", $this->session->get('id_user'))->get()->getRowArray();
        if ($status['status'] != 1) {
            return redirect()->to(base_url('Pengumuman'));
        }
        $data = [
            'title' => 'Kartu Tanda Peserta',
            'data' => $status
        ];

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('siswa/v_status/print', $data));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $options = ['Attachment' => false, 'enable_remote' => true];
        $dompdf->stream('KartuPeserta.pdf', $options);
    }
}
