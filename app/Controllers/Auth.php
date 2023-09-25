<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index () 
    {
        return view('auth/v_login');
    }

    public function login()
    {
        $data = []; // Inisialisasi variabel data

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Lakukan validasi pengguna di sini, misalnya dengan model User
            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Jika autentikasi berhasil, simpan informasi pengguna ke sesi
                $userData = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role']
                ];

                session()->set($userData);

                return redirect()->to('/dashboard'); // Ganti dengan halaman yang sesuai setelah login berhasil
            } else {
                // Jika autentikasi gagal, tampilkan pesan error
                $data['error'] = 'Login failed. Please check your username and password.';
            }
        }
    }

    public function register()
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
            $userModel = new UserModel();

            $data = [
                'username' => $username,
                'password' => $hashedPassword,
                'role' => $role
            ];

            $userModel->insert($data);

            return redirect()->to('/dashboard'); // Redirect ke halaman login setelah pendaftaran berhasil
        }
    }

    return view('auth/v_register', $data);
}


    public function logout()
    {
        // Implementasi logout di sini
        session()->destroy();
        return redirect()->to('/login'); // Ganti dengan halaman login
    }
}
