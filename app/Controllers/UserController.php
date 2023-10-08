<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }

    public function index()
    {
        $userModel = new \App\Models\UserModel();
        $data['users'] = $userModel->orderBy('username', 'ASC')->findAll();


        return view('backend/user/v_data_user', $data);
    }

    public function create()
    {
        return view('backend/user/v_create_user');
    }

    public function store()
    {

        $data = [];
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $role = $this->request->getPost('role');
            $confirm_password = $this->request->getPost('confirm_password');
    
            // Validasi input, misalnya, cek apakah password cocok dengan konfirmasi password
    
            if ($password !== $confirm_password) {
                $data['error'] = 'Password confirmation does not match.';
            } else {
                // Jika validasi berhasil, tambahkan pengguna ke database
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                $userModel = new \App\Models\UserModel();
    
                $data = [
                    'username' => $username,
                    'password' => $hashedPassword,
                    'role' => $role
                ];
    
                $userModel->insert($data);
    
                return redirect()->to('/user'); // Redirect ke halaman login setelah pendaftaran berhasil
            }
        }
    
        return view('backend/user/v_create_user', $data);
    }

    public function edit($id)
    {
        // Di sini Anda dapat mengambil data pengguna yang akan diedit dari model berdasarkan ID.
        // Kemudian, tampilkan formulir pengeditan dengan data pengguna tersebut.
        // Contoh:
        
        $model = new \App\Models\UserModel();
        $user = $model->find($id);
        
        $data = [
            'user' => $user,
        ];

        return view('backend/user/v_edit_user', $data);
    }

    public function update($id)
    {
        // Di sini Anda harus memproses data yang dikirimkan melalui formulir pengeditan
        // dan memperbarui data pengguna dalam database.
        // Kemudian, Anda dapat mengarahkan pengguna kembali ke halaman daftar pengguna atau halaman lain yang sesuai.

        // Contoh:
        
        $model = new \App\Models\UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role'),
        ];

        // Validasi data jika diperlukan

        $model->update($id, $data);

        // Set pesan sukses atau error jika diperlukan

        return redirect()->to('/user')->with('message', 'Data pengguna telah diperbarui.');
    }



    public function delete($id)
    {
        $userModel = new \App\Models\UserModel();
        $userModel->delete($id);

        return redirect()->to('/user');
    }
}
