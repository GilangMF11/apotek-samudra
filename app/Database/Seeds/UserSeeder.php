<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Load the database
        $db = \Config\Database::connect();

        // Create sample users
        $users = [
            [
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_BCRYPT),
                'role' => 'admin'
            ],
            [
                'username' => 'kasir',
                'password' => password_hash('kasir123', PASSWORD_BCRYPT),
                'role' => 'kasir'
            ],
            [
                'username' => 'apotekter',
                'password' => password_hash('apotekter123', PASSWORD_BCRYPT),
                'role' => 'apotekter'
            ]
        ];

        // Insert the data into the users table
        $db->table('users')->insertBatch($users);
    }
}