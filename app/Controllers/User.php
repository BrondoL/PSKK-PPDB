<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $users = $this->UserModel->where('role_id !=', 1)->get()->getResultArray();

        $data = [
            'title' => 'Administrator - SMA Kebangsaan',
            'head'  => 'UserSettings',
            'users' => $users
        ];
        return view('admin/v_user/index', $data);
    }

    public function form_edit()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {

            $id = $request->getVar('id');
            $row = $this->UserModel->find($id);

            $data = [
                'id'        => $row['id_user'],
                'nama'      => $row['nama_user'],
                'foto'      => $row['foto_user'],
                'username'  => $row['username'],
                'email'     => $row['email'],
            ];

            $msg = [
                'sukses' => view('admin/v_user/update', $data)
            ];

            echo json_encode($msg);
        } else {
            exit(view('errors/html/error_404'));
        }
    }

    public function edit()
    {
        $request = \Config\Services::request();

        if ($request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'nama' => [
                    'label' => 'Nama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'username' => [
                    'label' => 'Username',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'valid_email' => '{field} salah'
                    ]
                ],
                'password2' => [
                    'label' => 'Confirm Password',
                    'rules' => 'matches[password]',
                    'errors' => [
                        'matches' => '{field} tidak cocok'
                    ]
                ]
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'nama'       => $validation->getError('nama'),
                        'username'   => $validation->getError('username'),
                        'email'      => $validation->getError('email'),
                        'password2'  => $validation->getError('password2')
                    ]
                ];
            } else {
                $simpandata = [
                    'nama'      => $request->getVar('nama'),
                    'username'  => $request->getVar('username'),
                    'email'     => $request->getVar('email'),
                ];

                if ($request->getVar('password') != NULL) {
                    $simpandata['password'] = password_hash($request->getVar('password'), PASSWORD_DEFAULT);
                }

                $id = $request->getVar('id');

                $this->UserModel->update($id, $simpandata);
                $msg = [
                    'sukses' => 'Data berhasil diupdate'
                ];
            }
            echo json_encode($msg);
        } else {
            exit(view('errors/html/error_404'));
        }
    }

    public function show_detail()
    {
        $request = \Config\Services::request();
        if ($request->isAJAX()) {

            $id = $request->getVar('id');
            $row = $this->UserModel->where('id_user', $id)->get()->getRowArray();

            $data = [
                'id'        => $row['id_user'],
                'nama'      => $row['nama_user'],
                'foto'      => $row['foto_user'],
                'username'  => $row['username'],
                'email'     => $row['email'],
                'last_login' => $row['last_login'],
            ];

            $msg = [
                'sukses' => view('admin/v_user/detail', $data)
            ];

            echo json_encode($msg);
        } else {
            exit(view('errors/html/error_404'));
        }
    }

    public function hapus()
    {
        $request = \Config\Services::request();

        if ($request->isAJAX()) {

            $id = $request->getVar('id');

            $this->UserModel->delete($id);

            $msg = [
                'sukses' => 'Data berhasil dihapus'
            ];

            echo json_encode($msg);
        }
    }
}
