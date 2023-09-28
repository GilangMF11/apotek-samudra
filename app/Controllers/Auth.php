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
        // Validasi form login
        $validation = \Config\Services::validation();
        $validationRules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            // Jika validasi gagal, kembalikan ke halaman login dengan pesan error
            return view('auth/v_login', ['validation' => $validation]);
        }

        // Ambil input username dan password dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user berdasarkan username
        $user = $this->userModel->where('username', $username)->first();

        if ($user) {
            // Jika user ditemukan, verifikasi password
            if (password_verify($password, $user['password'])) {
                // Jika password benar, login berhasil
                // Set session atau token auth sesuai kebutuhan
                // Redirect ke halaman dashboard atau halaman setelah login sukses
                return redirect()->to('/dashboard');
            } else {
                // Jika password salah, kembalikan ke halaman login dengan pesan error
                return view('auth/v_login', ['validation' => $validation, 'error' => 'Password salah']);
            }
        } else {
            // Jika user tidak ditemukan, kembalikan ke halaman login dengan pesan error
            return view('auth/v_login', ['validation' => $validation, 'error' => 'Username tidak ditemukan']);
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
        return redirect()->to('/'); // Ganti dengan halaman login
    }
}
