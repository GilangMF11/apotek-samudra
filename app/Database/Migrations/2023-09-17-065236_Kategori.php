<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addfields([
            'id_kategori' => [
                'type'           => 'INT',  
                'constraint'     => 12,
                'auto_increment' => true,
            ],
            'nmkategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbkategori');
    }

    public function down()
    {
        $this->forge->dropTable('tbkategori');
    }
}
