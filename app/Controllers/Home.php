<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $userId = session()->get('user_id');
        $role = session()->get('role');

        $db = db_connect();
        $builder = $db->table('users'); // Sesuaikan dengan nama tabel Anda
        $total_users = $builder->countAllResults();

        // Kemudian, Anda dapat melewatkan $total_users ke tampilan (view) Anda
        return view('backend/dashboard/v_dashboard', ['total_users' => $total_users, 'role' => $role]);
    }
}
