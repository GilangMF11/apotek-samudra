<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'role'];

    // Fungsi untuk mendapatkan informasi pengguna berdasarkan username
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    public function insertData($data) {
        return $this->db->table($this->table)->insert($data);
    }

}
